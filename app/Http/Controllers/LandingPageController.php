<?php

namespace App\Http\Controllers;

use App\Models\Fumum;
use App\Models\Kamar;
use Illuminate\Http\Request;

class LandingPageController extends Controller{
    public function index(){
        $data = [
            "kamar" => Kamar::get(),
            "umum" => Fumum::get()
        ];
        return view("LandingPage.index", $data);
    }
}