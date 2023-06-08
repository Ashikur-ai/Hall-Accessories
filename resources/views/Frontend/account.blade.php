@extends('frontend.master')
@section('title')
    Account
@endsection
@section('main')
    <!-- SECTION -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Your Adds:</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
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
                                    <div>
                                        <h3>Live</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <!-- /SECTION -->

    <!-- account details start-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Your Details</h3>
                </div>
            </div>
            <div class="col-md-12">
                <table>
                    <tr>
                        <th class="col-md-4">Name </th>
                        <td class="col-md-2">:</td>
                        <td >Your name here</td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Email address </th>
                        <td class="col-md-2">:</td>
                        <td>Your email here</td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Phone </th>
                        <td class="col-md-2">:</td>
                        <td>01xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <th class="col-md-4">Address</th>
                        <td class="col-md-2">:</td>
                        <td>Daffodil International University,Dattapara,Ashulia,Savar, Dhaka</td>
                    </tr>
                </table>
            </div>
        </div>
    </div><hr>

    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="login.html" class="btn btn-primary">Login</a>
                <a href="registration.html" class="btn btn-primary">Register</a>
                <a href="#" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div><hr>
    <!-- account details end -->
@endsection
