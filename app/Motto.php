<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motto extends Model
{
    protected $fillable = [
        'visi', 'misi', 'motto',
    ];
}
