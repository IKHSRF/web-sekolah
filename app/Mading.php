<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    protected $fillable = [
        'nama_mading', 'detail_mading', 'foto_mading',
    ];
}
