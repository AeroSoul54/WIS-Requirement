@extends('layouts.master')

@section('container')
<div class="container col-md-6"> 
  <h2>Borrow a book</h2>
  <p>Fill up form</p>
  
  @include('layouts.errors')
  <form action='/books' method='POST'> 
    @csrf
    <div class="form-group" >
      <label for="inputNameOfEquipment">Book Title</label>
      <input type="text" class="form-control" id="inputNameOfEquipment" name="title" placeholder="e.g The Fault in our Stars">
    </div>
    <div class="form-group" >
      <label for="inputModelName">Author</label>
      <input type="text" class="form-control" id="inputModelName" name="author" placeholder="e.g John Green">
    </div>
    <div class="form-group" >
      <label for="inputModelName">Category</label>
      <input type="text" class="form-control" id="inputModelName" name="category" placeholder="e.g Fiction">
    </div>
    <button class="btn btn-primary" type="submit" name="action">Submit</button>
    <a href="/" class="btn btn-danger">Cancel</a>
  </form>
</div>
@endsection


