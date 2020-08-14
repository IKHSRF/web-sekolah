<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = [
        'nama_jurusan', 'detail_jurusan', 'foto_jurusan', 'tahun_berdiri',
    ];
}
