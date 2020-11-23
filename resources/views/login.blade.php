@extends('equipments.master-equipment')
@section('container')
<br />
<br />
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('layouts.errors')
                <div class="card">
                    <center><div class="card-header">Account Login</div></center>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                        	<div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="text" class="form-control" name="first_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="text" class="form-control" name="last_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">ID Number*</label>
                                <div class="col-md-6">
                                    <input type="text" id="text" class="form-control" name="id_number" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <i><center>*Please input ID Number without dash</center></i>
                            <br>
                            


                      

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
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
