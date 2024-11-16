<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.landing_page');
    }

    public function contact()
    {
    return view('home.contact');
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

    public function nextsumurbor()
    {
        return view('home.nextsumurbor');
    }
    public function layanankami(){
        return view('home.layananpsda.layanankami');
    }

    public function psdalainnya(){
        return view('home.psdalainnya');
    }
    public function kopsurat(){
        return view('home.kopsurat');
    }
}


