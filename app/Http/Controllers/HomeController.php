<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.landing_page');
    }

    public function layanan()
    {
    return view('home.layanan');
    }
    public function tentang()
    {
        return view('home.tentang');
    }
    public function nextirigasi()
    {
        return view('home.nextirigasi');
    }
    public function nextrawa()
    {
        return view('home.nextrawa');
    }
    public function nextsungai()
    {
        return view('home.nextsungai');
    }
    public function nextdanau()
    {
        return view('home.nextdanau');
    }
}   
    