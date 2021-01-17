<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['judul', 'deskripsi', 'gambar'];

    protected $hidden = [

    ];

    // public function getGambarAttribute($value) {
    //     return url("storage/" . $value );
    // }

}
