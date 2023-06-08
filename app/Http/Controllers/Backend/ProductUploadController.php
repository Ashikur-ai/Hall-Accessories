<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductUploadController extends Controller
{
    //
    function uploadProduct(Request $request){


        $data = new Product;


        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('ProductImage', $imageName);
        $data->image = $imageName;


        $data->pName = $request->pName;
        $data->pType = $request->pType;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->price = $request->price;

        $data->save();
        return redirect()->back();

    }


    function placeOrder(Request $request, $id){


        $order = new Order;
        $product = Product::find($id);

        $order->image = $product->image;

        $order->pName = $product->pName;
        $order->pType = $product->pType;
        $order->description = $product->description;
        $order->location = $product->location;
        $order->price = $product->price;

        $order->save();
        return redirect()->back()->with('message', 'Added to checkout.');

    }
}
