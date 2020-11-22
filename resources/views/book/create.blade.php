@extends('layouts.master')

@section('container')

<h5>Borrow a books</h5>
<p>Fill up form</p>

<div class="container">	
<div class="row">
    <form action='/books' method='POST'> 
    @csrf

<div class="row">
	<div class="col-first">
        <div class="input-field col s6">
          <input placeholder="ex. The Fault in our Stars" type="text" class="validate" name="title">
          <label>Book Title</label>
        </div>    

        <div class="input-field col s6">
          <input  placeholder="ex. John Green" type="text" class="validate" name="author">
          <label>Author</label>
        </div>
  
        <div class="input-field col s6">
          <input placeholder="ex. Fiction" type="text" class="validate" name="category">
          <label>Category</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="ex. YYYY-MM-DD" type="date" class="validate" name="rent_date">
          <label>Date Rent</label>
        </div>   

        <div class="input-field col s6">
          <input  placeholder="ex. YYYY-MM-DD" type="date" class="validate" name="due_date">
          <label>Due</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="ex. 80.75" type="decimal" class="validate" name="penalty">
          <label>Penalty</label>
        </div>
        
    </div>  
</div>

<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
</form>

</div>
<br>
<h6><a href="/">Cancel</a></h6>
</div>


@endsection

