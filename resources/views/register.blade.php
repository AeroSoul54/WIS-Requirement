@extends('layouts.master')
@section('container')
<br />
<br />
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @include('layouts.errors')
                <div class="card">
                    <center><div class="card-header">Account Login</div></center>
                    <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="text" class="form-control" name="name" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">Facility</label>
                                <div class="col-md-6">
                                    <input type="text" id="text" class="form-control" name="facility" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">Email Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="text" class="form-control" name="email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                            </div>
                          
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Register
                                </button> 
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

@endsection
