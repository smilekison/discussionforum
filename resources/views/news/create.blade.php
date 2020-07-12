@extends('layouts.app')

@section('content')
	<h1>Create New</h1>
	{{-- 	Opening form tag in laravel --}}
	{!! Form::open(['action' => 'NewsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    @csrf
    <div class="row">
        <label for="Title">Title:</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="row">
        <label for="Body">Body:</label>
        <textarea type="text" class="form-control" name="body"></textarea>
    </div>
    <div class="row" style="margin-top: 10px;">
    	<label for="Image">Image:</label>
        <input type="file" name="news_image">    
     </div>
    <div class="row">
        <strong>Date : </strong>  
        <input class="date form-control" type="date" id="datepicker" name="date">   
    </div>
    <div class="row" style="margin-top: 10px;">
        <label for="Source">Source:</label>
        <input type="text" class="form-control" name="source">
    </div>
    <div class="row" style="margin-top: 10px;">
            <label>Category: </label>

            <select name="category">
              <option value="Nepal">Nepal</option>
              <option value="Education">Education</option>
              <option value="Sports">Sports</option>  
            </select>
    </div>
    <div class="row" style="margin-top: 10px;">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
	{{-- Closing the form tag --}}
	{!! Form::close() !!}
@endsection