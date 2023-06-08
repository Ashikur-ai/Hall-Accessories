@extends('frontend1.master')
@section('title')
    Login
@endsection

@section('main')

    <!-- Login/Registration start-->
    <div class="container login">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <label>Don't have account? </label>
                    <a href="#" id="register">Click here for registration</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Login/Registration end-->
@endsection
