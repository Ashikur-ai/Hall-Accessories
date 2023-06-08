@extends('frontend.master')
@section('title')
    HotDeals
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
                        <h3 class="title">Hot Deals</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                <li><a data-toggle="tab" href="#tab1">Books</a></li>
                                <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset('/') }}/assets/frontend/img/product01.png" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Accessories</p>
                                            <h3 class="product-name"><a href="#">Laptop</a></h3>
                                            <h4 class="product-price">20,000tk<del class="product-old-price">30,000</del></h4>
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
                                    <!-- /product -->
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Table</p>
                                            <h3 class="product-name"><a href="#">Laptop</a></h3>
                                            <h4 class="product-price">800tk<del class="product-old-price"></del></h4>
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
                                    <!-- /product -->
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset('/') }}/assets/frontend/img/kitchenTools.jpg" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Kitchen Tools</p>
                                            <h3 class="product-name"><a href="#">Spoons Package</a></h3>
                                            <h4 class="product-price">600tk<del class="product-old-price"></del></h4>
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
                                    <!-- /product -->

                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset('/') }}/assets/frontend/img/book600.jpg" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Books</p>
                                            <h3 class="product-name"><a href="#">Book</a></h3>
                                            <h4 class="product-price">300tk <del class="product-old-price"></del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Chairs</p>
                                            <h3 class="product-name"><a href="#">chair</a></h3>
                                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
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

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Chairs</p>
                            <h3 class="product-name"><a href="#">chair</a></h3>
                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Table</p>
                            <h3 class="product-name"><a href="#">reading table</a></h3>
                            <h4 class="product-price">800tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Chairs</p>
                            <h3 class="product-name"><a href="#">chair</a></h3>
                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Table</p>
                            <h3 class="product-name"><a href="#">reading table</a></h3>
                            <h4 class="product-price">800tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Chairs</p>
                            <h3 class="product-name"><a href="#">chair</a></h3>
                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Table</p>
                            <h3 class="product-name"><a href="#">reading table</a></h3>
                            <h4 class="product-price">800tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Chairs</p>
                            <h3 class="product-name"><a href="#">chair</a></h3>
                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Table</p>
                            <h3 class="product-name"><a href="#">reading table</a></h3>
                            <h4 class="product-price">800tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Chairs</p>
                            <h3 class="product-name"><a href="#">chair</a></h3>
                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Table</p>
                            <h3 class="product-name"><a href="#">reading table</a></h3>
                            <h4 class="product-price">800tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/chair.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Chairs</p>
                            <h3 class="product-name"><a href="#">chair</a></h3>
                            <h4 class="product-price">2000tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/') }}/assets/frontend/img/table.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Table</p>
                            <h3 class="product-name"><a href="#">reading table</a></h3>
                            <h4 class="product-price">800tk <del class="product-old-price"></del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Buy Now</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /product -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->
@endsection
