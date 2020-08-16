<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    protected $fillable = [
        'nama_sarana', 'detail_sarana', 'foto_sarana',
    ];
}
