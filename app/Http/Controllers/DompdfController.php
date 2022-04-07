<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class DompdfController extends Controller{
    public function pdf($id){
        $data = [
            "judul" => "Laporan PDF",
            "user" => Reservasi::where("id",$id)->get()
        ];
        $pdf = \PDF::loadView("pdf", $data);
        return $pdf->download("Checkout.pdf");
    }
}