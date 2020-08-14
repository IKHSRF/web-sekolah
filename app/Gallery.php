<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'nama_galeri', 'detail_galeri', 'foto_galeri',
    ];
}
