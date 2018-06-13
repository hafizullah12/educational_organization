@extends('layouts.app')
@section('content')
<div class="container">
@include('admin.message')
<button class="btn btn-warning pull-right"><a href="{{route('teachers.index')}}">All post</a></button>
<div class="panel panel-primary">
    <div class="panel-heading text-center">Add New Teacher</div>
    <div class="panel-body">
    {!! Form::open(['action'=>'TeacherController@store','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Name') !!}
    {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Degisnation') !!}
    {!! Form::text('degisnation',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('Upload Image') !!}
    {!! Form::file('feature_image',null,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group"> 
    {!! Form::label('Email') !!}
    {!! Form::text('email',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Phone') !!}
    {!! Form::text('phone',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('Address') !!}
    {!! Form::textarea('address',null,['class' => 'form-control']) !!}	
    </div>
    <div class="form-group"> 
    {!! Form::label('S.S.C. Passing Year') !!}
    {!! Form::text('ssc',null,['class'=>'form-control','required'=>'required']) !!}
    </div> <div class="form-group"> 
    {!! Form::label('H.S.C passing Year') !!}
    {!! Form::text('hsc',null,['class'=>'form-control','required'=>'required']) !!}
    </div> <div class="form-group"> 
    {!! Form::label('Honours') !!}
    {!! Form::text('honours',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('Joining Date') !!}
    	{!! Form::text('joing_date',null,['class'=>'form-control','placeholder'=>'d-m-y']) !!}
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