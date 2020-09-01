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
use App\Mading;
use App\Gallery;

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
        $banner = Banner::orderBy('created_at','ASC')->limit(3);
        $sarana = Sarana::orderBy('created_at', 'ASC')->limit(6);
        $guru = Guru::orderBy('created_at', 'ASC')->limit(4);
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
        return view('user.profile.statistik',compact('jurusan','kontak'));
    }






    //mading 
    public function getMading(){
        $mading = Mading::all();
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        return view('user.kesiswaan.mading',compact('jurusan','kontak','mading'));
    }

    //sarana
    public function getSarana(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $sarana = Sarana::all();
        return view('user.sarana',compact('sarana','jurusan','kontak'));
    }

    //galery
    public function getGallery(){
        $jurusan = $this->jurusan();
        $kontak = $this->kontak();
        $gallery = Gallery::orderBy('created_at','ASC')->get();
        return view('user.gallery',compact('gallery','jurusan','kontak'));
    }
    
}
