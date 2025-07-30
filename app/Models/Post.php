<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; //specify the table name if it is not plural of the model name
    //
    protected $fillable = ['title', 'body', 'author', 'published'];//fields that can be updated
    protected $guarded = ['id']; //fields that cannot be updated(read only)
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
