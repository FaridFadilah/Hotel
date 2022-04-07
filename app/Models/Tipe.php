<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model{
    use HasFactory;
    protected $primaryKey = "id";
    public function kamar(){
        return $this->hasMany(Kamar::class);
    }
}
