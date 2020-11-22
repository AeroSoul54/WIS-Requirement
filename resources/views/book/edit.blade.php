@extends('layouts.master')

@section('container')

<h5>Update a book record</h5>
<p>Fill up form</p>
<div class="container">	
<div class="row">
    <form action='/books/{{ $book->id }}' method='POST'> 
    @csrf
    @method('PUT')

<div class="row">
	<div class="col-first">
        <div class="input-field col s6">
          <input placeholder="ex. The Fault in our Stars" type="text" class="validate" name="title" value="{{ $book->Title }}">
          <label>Book Title</label>
        </div>    

        <div class="input-field col s6">
          <input  placeholder="ex. John Green" type="text" class="validate" name="author" value="{{ $book->Author }}">
          <label>Author</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="ex. Fiction" type="text" class="validate" name="category" value="{{ $book->Category }}">
          <label>Category</label>
        </div>
  
        <div class="input-field col s6">
          <input placeholder="ex. YYYY-MM-DD" type="date" class="validate" name="rent_date" value="{{ $book->Rent_Date }}">
          <label>Date Rent</label>
        </div> 

        <div class="input-field col s6">
          <input  placeholder="ex. YYYY-MM-DD" type="date" class="validate" name="due_date" value="{{ $book->Rent_Date }}">
          <label>Due</label>
        </div>
    
        <div class="input-field col s6">
          <input placeholder="ex. 80.75" type="decimal" class="validate" name="penalty" value="{{ $book->Penalty }}">
          <label>Penalty</label>
        </div>
        
    </div>  
</div>

<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>

    </form>

</div>
<h6><a href="/">Cancel</a></h6>
</div>


@endsection

