<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Blog;
use App\Comments;
class CommentsController extends Controller
{
public function store(Blog $blog){
Comments::create([
'blog_id'=>$blog->id,
'name'=>request('name'),
'email'=>request('email'),
'comment'=>request('comment')
]);
return back();
}
}

