@extends('layouts.app')
@section('content')
<div class="container">
@include('admin.message')
<button class="btn btn-warning pull-right"><a href="{{route('post.index')}}">All post</a></button>
<div class="panel panel-primary">
    <div class="panel-heading text-center">Add New Post</div>
    <div class="panel-body">
    {!! Form::open(['action'=>'PostController@store','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Title') !!}
    {!! Form::text('title',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('Description') !!}
    {!! Form::textarea('description',null,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group">
    {!! Form::label('Feature Image') !!}
    {!! Form::file('feature_image',null,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group">
    	{!! Form::label('Date') !!}
    	{!! Form::text('date',null,['class'=>'form-control','placeholder'=>'d-m-y']) !!}
    </div>
    <div class="form-group">
    	<input type="submit" class="btn btn-success btn-block" value="Save">
    </div>
   
    {!! Form::close() !!}
	</div>
  </div>
</div>
@endsection

@section('script')
  
@endsection