@extends('Backend.template')
@section('main')
    <!-- Sale product-->
    <div class="container login">
        <div class="row">
            <div class="col-md-6">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form action="{{ route('uploadProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="pName" class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="pName" class="form-control" id="pName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pName" class="col-sm-2 col-form-label">Product Type</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="pType" id="validationCustom04" required>
                                <option selected disabled value="">Choose type</option>
                                <option>Accessories</option>
                                <option>Bed</option>
                                <option>Reading table</option>
                                <option>Chair</option>
                                <option>Bookself</option>
                                <option>Laptop</option>
                                <option>Kitchen tools</option>
                                <option>Rack</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pName" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input type="text" name="location" class="form-control" id="pName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="picture" class="col-sm-2 col-form-label">Upload Picture</label>
                        <div class="col-sm-10">
                            <input type="file" required="" class="form-control" name="file" placeholder="Drag your picture">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pPrice" class="col-sm-2 col-form-label">Product Price in BDT</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" id="pPrice">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                                   aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sale product end-->
@endsection
