@extends('frontend1.master')
@section('title')
    Bed
@endsection
@section('main')
    @include('frontend.template.navbar')
    @if(Session::has('message'))
        <h1 class="text-center text-success">{{ Session::get('message') }}</h1>
    @endif

    <!-- SECTION New products-->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Beds</h3>

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
                        @if($row->pType=="Bed")
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" height="270" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">{{ $row->pType }}</p>
                                        <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                        <h4 class="product-price">{{ $row->price }} <del class="product-old-price"></del></h4>

                                        <div class="product-rating">
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-compare">
                                                <a href="{{ route('placeOrder', $row->id) }}">
                                                    <i class="fa fa-shopping-cart"></i>

                                                </a>

                                                <span class="tooltipp">Buy Now</span></button>
                                            <button class="quick-view">
                                                <a href="{{ route("showSingleProduct", $row->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
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
