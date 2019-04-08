<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comments;
class BlogController extends Controller
{
public function index()
{
$blog=Blog::orderBy('id','desc')->get();
return view('blogs.index',compact('blog'));
}
public function create()
{
return view('blogs.create');
}
public function store(Blog $blog)
{
request()->validate([
'title'=>['required','min:3'],
'description'=>['required','min:3']
]);
Blog::create([
'title'=>request('title'),
'description'=>request('description')
]);
return redirect('/blogs');
}
public function show($id)
{
$blog=Blog::find($id);
$commen=Comments::where('blog_id',$id)->orderBy('created_at','DESC')->get();
return view('blogs.show',compact('commen','blog'));
}
public function edit(Blog $blog)
{ 
return view('blogs.edit',compact('blog'));
}
public function update(Blog $blog)
{
$blog->update(request(['title','description']));
return redirect('/blogs');
}
public function destroy(Blog $blog)
{
$blog->delete();
return redirect('/blogs');
}
}
