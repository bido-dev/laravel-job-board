<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['title'];
    protected $guarded = ['id']; // This can be used to specify fields that should not be mass assignable
    public function posts(){
        return $this->belongsToMany(Tag::class);
    }
}
