<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $fillable = [
        'nama_akademik', 'tahun_akademik',
    ];
}
