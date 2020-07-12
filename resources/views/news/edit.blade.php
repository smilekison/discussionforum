@extends('layouts.app')

@section('content')
	<h1>Edit Post</h1>
	{{-- 	Opening form tag in laravel --}}
	{!! Form::open(['action' => ['NewsController@update', $news->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
	{{Form::hidden('_method','PUT')}}

	<div class="row">
        <label for="Title">Title:</label>
        <input type="text" class="form-control" value= {{$news->title}} name="title">
    </div>
    <div class="row">
        <label for="Body">Body:</label>
        <textarea type="text" class="form-control" name="body">{{$news->body}}</textarea>
    </div>
    <div class="row" style="margin-top: 10px;">
    	<label for="Image">Image:</label>
        <input type="file" name="news_image">    
     </div>
    <div class="row">
        <strong>Date : </strong>  
        <input class="date form-control" type="date" id="datepicker" value={{$news->date}} name="date">   
    </div>
    <div class="row" style="margin-top: 10px;">
        <label for="Source">Source:</label>
        <input type="text" class="form-control" name="source" value={{$news->source}}>
    </div>
    <div class="row" style="margin-top: 10px;">
            <label>Category: </label>

            <select name="category">
              <option value="Nepal" @if($news->category=="Nepal") selected @endif>Nepal</option>
              <option value="Education" @if($news->category=="Education") selected @endif>Education</option>
              <option value="Sports" @if($news->category=="Sports") selected @endif>Sports</option>
            </select>
    </div>
    <div class="row" style="margin-top: 10px;">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>

	{{-- Closing the form tag --}}
	{!! Form::close() !!}
	
@endsection