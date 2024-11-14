<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'image',
        'caption',
        'summary',
        'excerpt',
        'comments',
    ];

    public function categories(){
        return $this->belongsToMany(category::class);
    }
}