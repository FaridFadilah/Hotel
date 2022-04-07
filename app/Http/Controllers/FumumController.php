<?php

namespace App\Http\Controllers;

use App\Models\Fumum;
use Illuminate\Http\Request;

class FumumController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $data = [
            "title" => "Tambah Fasilitas Umum",
            "method" => "POST",
            "route" => route("fas.umu.simpan"),
        ];
        return view("admin.CreateFasilitasUmum", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $fasilitas = new Fumum;
        if($request->hasFile("gambar")){
            $file = $request->file("gambar");
            $gambar = "gambar-" . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("storage/img/gambar/", $gambar);
            $fasilitas->gambar = $gambar;
        } else{
            $fasilitas->gambar = "default.jpg";
        }
        $fasilitas->save();
        return redirect()->route("admin.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data = [
            "title" => "test",
            "method" =>  "PUT",
            "route" => route("fas.umu.update", $id),
            "kamar" => Fumum::where("id", $id),
            "fasilitas" => Fumum::get()
        ];
        return view("admin.EditFasUmu",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $fumum = Fumum::find($id);

        if($request->hasFile("gambar")){
            $file = $request->file("gambar");
            $gambar = "gambar-" . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("storage/img/gambar/", $gambar);
            $fumum->gambar = $gambar;
        } else{
            $fumum->gambar = "default.jpg";
        }

        $fumum->update();
        return redirect()->route("admin.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $destroy = Fumum::where("id",$id);
        $destroy->delete();
        return redirect(route("admin.")); 
    }
}