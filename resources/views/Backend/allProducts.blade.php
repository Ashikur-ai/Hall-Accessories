@extends('Backend/template')
@section('main')
    <section class="main-container">
        <h1 class="text-center">All Products</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->pName }}</td>
                    <td>{{ $row->pType }}</td>
                    <td><img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" width="100" alt=""></td>
                    <td>{{ $row->price }}</td>
                    <td>
                        <a href="{{ route('deleteProduct', $row->id) }}">
                            <input type="button" class="btn-danger" value="Delete"></td>
                    </a>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
