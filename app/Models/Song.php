<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'album', 'author', 'editor', 'length', 'poster'];

    use HasFactory;
}
