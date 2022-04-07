<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use App\Models\User;
use App\Models\Fumum;
use App\Models\Kamar;
use App\Models\Fkamar;
use Illuminate\Http\Request;
use App\Models\FasilitasKamar;

class KamarController extends Controller{
    public function index(){
        $data = [
            "title" => "gambar kamar",
            "kamar" => Kamar::filter()->get(),
            "umum" => Fumum::get(),
            "route" => route("kamar.tambah")
        ];
        return view("admin.index", $data);
    }

    public function create(){
        $data = [
            "title" => "Tambah Kamar",
            "method" =>  "POST",
            "route" =>  route("kamar.simpan"),
            "fasilitas" => Tipe::get()
        ];
        return view("admin.CreateKamar",$data);
    }

    public function store(Request $request){
        $kamar = new Kamar;

        if($request->hasFile("gambar")){
            $file = $request->file("gambar");
            $gambar = "gambar-" . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("storage/img/gambar/", $gambar);
            $kamar->gambar = $gambar;
        } else{
            $kamar->gambar = "default.jpg";
        }

        $kamar->harga = $request->harga;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->tipe_id = $request->tipe_id;

        $kamar->save();
        return redirect()->route("admin.");
    }
    
    public function user(){
        $data = [
            "title" => "info user",
            "route" => route("admin.tambah"),
            "user" => User::count(),
            "petugas" => User::where("role", "resepsionis")->orWhere("role", "admin")->count(),
            "tamu" => User::where("role", "user")->count(),
            "tble_user" => User::latest()->filter()->paginate(5)
        ];
        return view("admin.user", $data);
    }

    public function deletePetugas($id){
        User::where("id", $id)->delete();
        return redirect()->route("admin.user");
    }

    public function tambahPetugas(){
        $data = [
            "title" => "tambah Petugas",
            "route" => route("admin.simpan"),
            "method" => "POST"
        ];
        return view("admin.tambahPetugas", $data);
    }

    public function simpanPetugas(Request $request){
        $petugas = new User;

        $petugas->name = $request->name;
        $petugas->username = $request->username;
        $petugas->email = $request->email;
        $petugas->password = bcrypt($request->password);
        $petugas->role = $request->role;

        $petugas->save();
        return redirect()->route("admin.");
    }

    public function show($id){
        $data = [
            "kamar" => Kamar::where("id", $id)->get(),
        ];
        return view("admin.show", $data);
    }

    public function edit($id){
        $data = [
            "title" => "test",
            "method" =>  "PUT",
            "route" => route("kamar.update", $id),
            "kamar" => Kamar::where("id", $id)->get(),
            "tipe" => Tipe::get()
        ];
        return view("admin.EditKamar",$data);
    }

    public function update(Request $request, $id){
        $kamar = Kamar::find($id);

        if($request->hasFile("gambar")){
            $file = $request->file("gambar");
            $gambar = "gambar-" . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("storage/img/gambar/", $gambar);
            $kamar->gambar = $gambar;
        } else{
            $kamar->gambar = "default.jpg";
        }

        $kamar->harga = $request->harga;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->tipe_id = $request->tipe_id;

        $kamar->update();
        return redirect()->route("admin.");   
    }

    public function destroy($id){
        $destroy = Kamar::where("id",$id);
        $destroy->delete();
        return redirect(route("admin.")); 
    }
}