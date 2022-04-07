<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ["status"];

    public function scopeFilter($query){
        if(request("search")){
            $query->where("check_in", "like", "%" . request("search") . "%")->orWhere("status" , "like" , "%" . request("search") . "%");
        }
    }

    public function Kamar(){
        return $this->belongsTo(Kamar::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
