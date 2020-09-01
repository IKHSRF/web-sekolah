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
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function jurusan(){
        return $jurusan = Jurusan::all(); 
    }
    public function getHome(){
        $jurusan = $this->jurusan();
        $banner = Banner::orderBy('updated_at','ASC')->limit(3);
        $sarana = Sarana::orderBy('updated_at', 'ASC')->limit(6);
        $guru = Guru::orderBy('updated_at', 'ASC')->limit(4);
        return view('user.home', compact('sarana','guru','banner', 'jurusan'));
    }

    public function getSejarah(){
        $jurusan = $this->jurusan();
        $sejarah = Sejarah::all();
        return view('user.profile.sejarah',compact('sejarah','jurusan'));
    }

    public function getVisiMisi(){
        $jurusan = $this->jurusan();
        $motto = Motto::all();
        return view('user.profile.visimisi',compact('motto','jurusan'));
    }

    public function getKemitraan(){
        $jurusan = $this->jurusan();
        $kemitraan = Kemitraan::all();
        return view('user.profile.kemitraan',compact('kemitraan','jurusan'));
    }

    public function getPrestasi(){
        $jurusan = $this->jurusan();
        $prestasi = Prestasi::all();
        return view('user.profile.prestasi','jurusan');
    }

    public function getGuru(){
        $jurusan = $this->jurusan();
        $guru = Guru::all();
        return view('user.profile.guru', compact('guru','jurusan'));
    }

    public function getStuktur(){
        $jurusan = $this->jurusan();
        return view('user.profile.stuktur','jurusan');
    }

    public function getStatistik(){
        $jurusan = $this->jurusan();
        return view('user.profile.sejarah','jurusan');
    }
}
