<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $connection = 'mongodb';

    protected $fillable = [
        'title',
        'desc',
        'author',

    ];
}
