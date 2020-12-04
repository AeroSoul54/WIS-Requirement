@extends('layouts.master')
@section('container')

<div class="container">
    	<br>
    	<br>
		<h3 class="center">
			<h1 class="welcome"><center>Welcome {{ auth()->user()->name }}</center></h1>
		</h3>
    </div>



<style type="text/css">
	
 .welcome { 
 	font-size: 50px;
  }
</style>
@endsection