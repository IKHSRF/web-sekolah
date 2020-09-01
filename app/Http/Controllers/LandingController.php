<?php

namespace App\Http\Controllers;
use App\Sarana;
use App\Guru;
use App\Jurusan;
use App\Sejarah;
use App\Motto;
use App\Kemitraan;
use App\Prestasi;
use App\Banner;
use App\Kontak;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function kontak(){
        return $kontak = Kontak::all();
    }
    public function jurusan(){
        return $jurusan = Jurusan::all(); 
    }
    public function getHome(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $banner = Banner::orderBy('updated_at','ASC')->limit(3);
        $sarana = Sarana::orderBy('updated_at', 'ASC')->limit(6);
        $guru = Guru::orderBy('updated_at', 'ASC')->limit(4);
        return view('user.home', compact('sarana','guru','banner', 'jurusan','kontak'));
    }

    public function getSejarah(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $sejarah = Sejarah::all();
        return view('user.profile.sejarah',compact('sejarah','jurusan','kontak'));
    }

    public function getVisiMisi(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $motto = Motto::all();
        return view('user.profile.visimisi',compact('motto','jurusan','kontak'));
    }

    public function getKemitraan(){
        $kontak = $this->kontak();
        $jurusan = $this->jurusan();
        $kemitraan = Kemitraan::all();
        return view('user.profile.kemitraan',compact('kemitraan','jurusan','kontak'));
    }

    public function getPrestasi(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $prestasi = Prestasi::all();
        return view('user.profile.prestasi',compact('prestasi','jurusan','kontak'));
    }

    public function getGuru(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $guru = Guru::all();
        return view('user.profile.guru', compact('guru','jurusan','kontak'));
    }

    public function getStuktur(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        return view('user.profile.stuktur',compact('jurusan','kontak'));
    }

    public function getStatistik(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        return view('user.profile.sejarah',compact('jurusan','kontak'));
    }
}
