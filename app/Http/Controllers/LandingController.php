<?php

namespace App\Http\Controllers;
use App\Sarana;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getHome(){
        $sarana = Sarana::orderBy('updated_at', 'ASC')->limit(6);
        return view('user.home', compact('sarana'));
    }
}
