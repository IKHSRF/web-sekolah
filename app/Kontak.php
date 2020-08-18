<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = [
        'hotline', 'email', 'alamat', 'youtube', 'facebook', 'instagram',
    ];
}
