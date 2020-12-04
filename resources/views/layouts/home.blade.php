
@extends('layouts.master')
@section('container')
<main role="main" class="container">
  <div class="jumbotron text-center" style="background-color: white">
    <h1 class="card-title h1">UC Borrowing System</h1>
    <p class="blue-text my-4 font-weight-bold">a requirement for web information system</p>

    <center>
      <div class="col-md-6">
        <a href="/register" class="btn btn-primary">Register</a>
        <a href="/login" class="btn btn-primary">Login</a>
      </div>
    </center>

  </main>

  <style type="text/css">
   
    .btn {
      margin:1%;
    }
  </style>

  @endsection