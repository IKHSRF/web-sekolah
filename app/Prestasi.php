<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = [
        'nama_prestasi', 'detail_prestasi', 'foto_prestasi',
    ];
}
