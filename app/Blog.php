<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model
{
protected $fillable=[
'title','description'
];
public function comments(){
return $this->hasMany(Comment::class);
}
}

