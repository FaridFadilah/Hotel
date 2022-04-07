<?php

namespace App\Models;

use App\Models\FasilitasKamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model{
    use HasFactory;
    protected $fillable = ["gambar", "deskripsi", "harga"];
    protected $guarded = ["id"];

    protected $primaryKey = "id";

    public function scopeFilter($query){
        if(request("search")){
            $query->where("no_kamar", "like", "%" . request("search") . "%")->orWhere("deskripsi" , "like" , "%" . request("search") . "%");
        }
    }

    public function fkamar(){
        return $this->hasMany(Fkamar::class);
    }
    public function tipe(){
        return $this->belongsTo(Tipe::class);
    }
    public function reservasi(){
        return $this->hasOne(Reservasi::class);
    }
}