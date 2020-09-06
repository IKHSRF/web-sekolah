<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motto extends Model
{
    protected $fillable = [
        'visi', 'misi', 'motto', 'kebijakan_mutu', 'sasaran_mutu', 'karakter_utama', 'afirmasi_siswa',
    ];
}
