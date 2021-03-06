

@extends('blogs.layout')
@section('content')
<div >
   <h2 style="text-align:center">Blogs List</h2>
</div>
<div class="float-right">
   <div class="row">
      <div class="col">
         <a  class="btn btn-primary col-md-12" href="/blogs/create">New</a>
      </div>
   </div>
</div>
<br/>
<br/>
<div class="container my-3">
   @foreach($blog as $blogs)
   <div class="card">
      <h5 class="card-header">{{ $blogs->title}}</h5>
      <div class="card-body">
         <p class="card-text">{{ $blogs->description }}</p>
         <a href="/blogs/{{$blogs->id}}" class="btn btn-primary">Details</a>
      </div>
   </div>
   @endforeach
</div>
@endsection

