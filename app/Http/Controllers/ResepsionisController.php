<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepsionisController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = [
            "title" => "Dashboard",
            "tamu" => Reservasi::count(),
            "accept" => Reservasi::where("status","<", "Active")->count(),
            "reservasi" => Reservasi::latest()->filter()->Paginate(5),
            "kamar" => Kamar::count()
        ];
        return view("resepsionis.index", $data);
    }

    public function search(Request $request){
        // $search = Reservasi::whereHas("user", function($query) use ($request){
        //     $query->where("name", "like", "%{$request->name}%");
        // })->paginate();
        // return view("resepsionis.search", compact("search"));
    }

    public function create(){
        //
    }

    public function edit($id){
        //
    }

    public function updateStatus($id){
        $tamu = Reservasi::find($id);
        $kamar = Kamar::where("id", $tamu->kamar_id);

        $tamu->update(["status" => "Accept"]);
        $kamar->update(["status" => "terisi"]);
        return redirect()->route("resepsionis");
    }

    public function destroy($id){

        $reservasi = Reservasi::find($id);
        $kamar = Kamar::where("id", $reservasi->kamar_id);
        $reservasi->delete();
        $kamar->update(["status" => "tidak terisi"]);
        return redirect()->route("resepsionis");
    }
}