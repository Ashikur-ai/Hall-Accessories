<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Hall Accessories | @yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/style.css"/>



</head>
<body>
<!-- HEADER -->
<header>

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-sm-2">
                    <a href="{{ asset('/') }}" class="Logo">
                        <h2 style="color: rgb(189, 173, 173);margin-top: 20px;">Accessories</h2>
                    </a>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-5 col-sm-6 col-3">
                    <div class="header-search">
                        <form>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-5 clearfix">
                    <div class="header-ctn">
                        <!-- Sale something -->

                        <!-- /Sale something -->


                        <!-- My account -->

                        <!-- /My account -->

{{--                        Checkout--}}


                        @php
                            $customer_id = Session::get('id');
                        @endphp
                        @if($customer_id!=Null)

                            <div>
                                <a href="{{ route('logout_customer') }}">
                                    <i class="fa fa-checkout"></i>
                                    <span>Logout</span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('showMyProduct') }}">
                                    <i class="fa fa-checkout"></i>
                                    <span>My Products</span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('saleProduct') }}">
                                    <span>Sale Something</span>
                                </a>
                            </div>


                            <div>
                                <a href="{{ route('checkout') }}">
                                    <i class="fa fa-checkout"></i>
                                    <span>Checkout</span>
                                </a>
                            </div>


                        @else
{{--                            <li><a class="nav-link scrollto" href="{{ route('showUserLoginPage') }}"><span>Login</span><i class="fa-solid fa-user"></i></a></li>--}}
{{--                            <li><a class="nav-link scrollto" href="{{ route('showUserRegisterPage') }}"><span>Register</span><i class="fa-solid fa-user"></i></a></li>--}}
                            <div>
                                <a href="{{ route('showUserLoginPage') }}">
                                    <i class="fa fa-checkout"></i>
                                    <span>Login</span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('showUserRegisterPage') }}">
                                    <i class="fa fa-checkout"></i>
                                    <span>Register</span>
                                </a>
                            </div>
                        @endif


                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

@yield('main')


<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->
<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>Daffodil International University</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>+8801xxxxxxxxx</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <li><a href="#">Hot deals</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smartphones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Murad
							</span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<script src="{{ asset('/') }}/assets/frontend/js/jquery.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/slick.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/nouislider.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/jquery.zoom.min.js"></script>
<script src="{{ asset('/') }}/assets/frontend/js/main.js"></script>

</body>
</html>

