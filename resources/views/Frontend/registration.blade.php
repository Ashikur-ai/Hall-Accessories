@extends('frontend.master')
@section('title')
    Registration
@endsection

@section('main')
    <!-- Login/Registration start-->
    <div class="container login">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="email" class="form-control" id="Name" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <label>Have an account? </label>
                    <a href="#" id="register">Click here for Login</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Login/Registration end-->
@endsection
