<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerjalananDinasController extends Controller
{
    public function index(){
        return view('dashboard.perjanalan-dinas.index');
    }
}
