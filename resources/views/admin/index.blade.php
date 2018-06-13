@extends('layouts.app')
@section('content')
<div class="container">
<button class="btn btn-warning pull-right"><a href="{{route('post.index')}}">Show All Posts</a></button>
<div class="panel panel-primary">
    <div class="panel-heading">Add New Post</div>
    <div class="panel-body">
   <h1><a href="{{route('post.create')}}">Post</a></h1>
   <h1><a href="{{route('teachers.create')}}">Teachers</a></h1>
	</div>
  </div>
</div>
@endsection

@section('script')
  
@endsection