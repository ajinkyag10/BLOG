<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Comments extends Model
{
protected $fillable=[
'blog_id','name','email','comment'
];
public function blog(){
return $this->belongsTo('App\Blog');
}
}

