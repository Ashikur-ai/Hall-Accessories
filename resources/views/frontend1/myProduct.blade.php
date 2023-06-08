@extends('frontend1.master')
@section('title')
    My Products
@endsection
@section('main')
    @include('frontend.template.navbar')

    <!-- SECTION New products-->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">My Products</h3>

                    </div>
                </div>
                <!-- /section title -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

            @foreach($data as $row)
                <!-- product -->
                    <a href="{{ route("showSingleProduct", $row->id) }}">
                        <div class="col-md-3 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('/') }}/SaleImage/{{ $row->image }}" height="270" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{ $row->pType }}</p>
                                    <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                    <h4 class="product-price">{{ $row->price }} <del class="product-old-price"></del></h4>

                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- /product -->
                @endforeach




            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->
@endsection
