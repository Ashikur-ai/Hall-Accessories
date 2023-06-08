@extends('frontend1.master')
@section('title')
    Product
@endsection


@section('main')
    @include('frontend.template.navbar')

    @if(Session::has('message'))
        <h1 class="text-center">{{ Session::get('message') }}</h1>
    @endif

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->

            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{ $data->pName }}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">{{ $data->price }} tk <del class="product-old-price"> 1200</del></h3>
                        </div>
                            <p>{{ $data->description }}</p>
                        <div class="product-options">
                            <label>
                                Size
                                <select class="input-select">
                                    <option value="0">X</option>
                                </select>
                            </label>
                            <label>
                                Color
                                <select class="input-select">
                                    <option value="0">Red</option>
                                </select>
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <a href="{{ route('placeOrder', $data->id) }}">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Buy Now</button>
                            </a>
                        </div>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Table</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>

                <!-- /Product details -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Related Products</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
{{--                                    Reading table starts--}}
                                    @if($data->pType=='Reading table')
                                        @foreach($products as $row)
                                            <!-- product -->
                                              @if($row->pType=='Chair')
                                                    <div class="product">

                                                        <div class="product-img">
                                                            <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">{{ $row->pType }}</p>
                                                            <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                                            <h4 class="product-price">{{ $row->price }}tk<del class="product-old-price">30,000</del></h4>
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-btns">
                                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                                <!-- /product -->
                                        @endforeach
{{--                                        Reading table ends--}}

{{--                                        Bed starts --}}
                                    @elseif($data->pType=='Bed')
                                            @foreach($products as $row)
                                            <!-- product -->
                                                @if($row->pType=='Bookself')
                                                    <div class="product">

                                                        <div class="product-img">
                                                            <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">{{ $row->pType }}</p>
                                                            <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                                            <h4 class="product-price">{{ $row->price }}tk<del class="product-old-price">30,000</del></h4>
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-btns">
                                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                            <!-- /product -->
                                            @endforeach
{{--                                        Bed ends--}}

{{--                                            Rack starts--}}
                                    @elseif($data->pType=='Rack')
                                            @foreach($products as $row)
                                            <!-- product -->
                                                @if($row->pType=='Kitchen tools')
                                                    <div class="product">

                                                        <div class="product-img">
                                                            <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">{{ $row->pType }}</p>
                                                            <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                                            <h4 class="product-price">{{ $row->price }}tk<del class="product-old-price">30,000</del></h4>
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-btns">
                                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                            @endforeach
{{--                                                Rack ends--}}
                                    @elseif($data->pType=='Chair')
                                                    @foreach($products as $row)
                                                    <!-- product -->
                                                        @if($row->pType=='Reading table')
                                                            <div class="product">

                                                                <div class="product-img">
                                                                    <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="">
                                                                    <div class="product-label">
                                                                        <span class="sale">-30%</span>
                                                                        <span class="new">NEW</span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-body">
                                                                    <p class="product-category">{{ $row->pType }}</p>
                                                                    <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                                                    <h4 class="product-price">{{ $row->price }}tk<del class="product-old-price">30,000</del></h4>
                                                                    <div class="product-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="product-btns">
                                                                        <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        @endif


                                                    <!-- /product -->
                                                    @endforeach

                                     @elseif($data->pType=='Bookself')
                                            @foreach($products as $row)
                                            <!-- product -->
                                                @if($row->pType=='Reading table')
                                                    <div class="product">

                                                        <div class="product-img">
                                                            <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">{{ $row->pType }}</p>
                                                            <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                                            <h4 class="product-price">{{ $row->price }}tk<del class="product-old-price">30,000</del></h4>
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-btns">
                                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endif
                                            <!-- /product -->
                                            @endforeach

                                    @elseif($data->pType=='Kitchen tools')
                                            @foreach($products as $row)
                                            <!-- product -->
                                                @if($row->pType=='Rack')
                                                    <div class="product">

                                                        <div class="product-img">
                                                            <img src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">{{ $row->pType }}</p>
                                                            <h3 class="product-name"><a href="#">{{ $row->pName }}</a></h3>
                                                            <h4 class="product-price">{{ $row->price }}tk<del class="product-old-price">30,000</del></h4>
                                                            <div class="product-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-btns">
                                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                            @endif
                                            <!-- /product -->
                                        @endforeach
                                     @endif


                                            <!-- /product -->



                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
