<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('admin.index');
    }

    public function reservasi(){
        return view('admin.ControlKamar');
    }
}