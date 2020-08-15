<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $fillable = [
        'judul_sejarah', 'detail_sejarah', 'foto_sejarah',
    ];
}
