<?php

namespace App\Http\Controllers;

use App\Models\Fumum;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReservasiController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = [
            "title" => "Dashboard",
            "reservasi" => Reservasi::where("user_id", Auth::user()->id )->get()
        ];
        return view("User.index" ,$data);
    }

    public function create(){
        $data = [
            "kamar" => Kamar::get(),
            "umum" => Fumum::get()
        ];
        return view("LandingPage.index", $data);
    }

    public function store(Request $request){
        $reservasi = new Reservasi;

        $reservasi->user_id = $request->user_id;
        $reservasi->kamar_id = $request->kamar_id;
        $reservasi->check_in = $request->check_in;
        $reservasi->check_out = $request->check_out;

        $reservasi->save();
        return redirect()->route("user");
    }

    public function show($id){
        // $data = Kamar::find($id);
        // dd($data);
        $data = [
            "kamar" => Kamar::where("id",$id)->get(),
            "route" => route("reservasi.simpan", $id)
        ];
        return view("LandingPage.show", $data);
        // return view("LandingPage.show")->with("kamar", $data);
    }

    public function edit($id){
    
    }
    public function update(Request $request, $id){
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}