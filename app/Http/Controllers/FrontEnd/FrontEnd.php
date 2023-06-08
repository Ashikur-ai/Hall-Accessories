<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class FrontEnd extends Controller
{
    //
    public function PageSaleProduct(){
        return view('frontend1.saleProduct');
    }

    public function PageCheckout(){
        $data = Order::all();
        $total=0;
        foreach ($data as $row)
        {
            $total = $total + $row->price;
        }
        return view('frontend1.checkout', compact('data', 'total'));
    }

    public function PageHotDeal(){
        $data = Product::all();

        return view('frontend1.OtherPage.hotDeal', compact('data'));
    }

    public function PageBed(){
        $data = Product::all();
        return view('frontend1.OtherPage.bed', compact('data'));
    }

    public function PageReadingTable(){
        $data = Product::all();
        return view('frontend1.OtherPage.readingTable', compact('data'));
    }

    public function PageChair(){
        $data = Product::all();

        return view('frontend1.OtherPage.chair', compact('data'));
    }

    public function PageRack(){
        $data = Product::all();
        return view('frontend1.OtherPage.rack', compact('data'));
    }

    public function PageBookself(){
        $data = Product::all();
        return view('frontend1.OtherPage.bookself', compact('data'));
    }

    public function PageKitchenTool(){
        $data = Product::all();
        return view('frontend1.OtherPage.kitchentool', compact('data'));
    }

    function showSingleProduct($id){
        $data = Product::find($id);
        $products = Product::all();
        return view('frontend1.product', compact('data', 'products'));
    }

    function saleProduct(Request $request){


        $data = new Sale;


        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('SaleImage', $imageName);
        $data->image = $imageName;


        $data->pName = $request->pName;
        $data->pType = $request->pType;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->price = $request->price;

        $data->save();
        return redirect()->back();

    }

    function showMyProduct(){
        $data = Sale::all();
        return view('frontend1.myProduct', compact('data'));
    }


}
