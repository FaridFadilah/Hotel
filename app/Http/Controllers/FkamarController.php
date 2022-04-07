<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Fkamar;
use Illuminate\Http\Request;

class FkamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $data = [
            "title" => "Tambah Fasilitas",
            "method" => "POST",
            "route" => route("fas.kam.simpan", $id)
        ];
        return view("admin.CreateFasilitasKamar", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id){
        $fkamar = new Fkamar;

        $fkamar->kamar_id = Kamar::where("id",$id)->value("id");
        $fkamar->fasilitas = $request->fasilitas;

        $fkamar->save();
        return redirect()->route("kamar.lihat", $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data = [
            "title" => "Edit Fasilitas",
            "method" => "POST",
            "route" => route("fas.kam.tambah", $id)
        ];
        return view("admin.EditFasKam", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $fasilitas = Fkamar::find($id);

        $fasilitas->tipe = $request->tipe;
        $fasilitas->fasilitas = $request->fasilitas;

        $fasilitas->update();
        return redirect()->route("admin.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Fkamar::where("id",$id)->delete();
        return redirect()->route("admin.");
    }
}
