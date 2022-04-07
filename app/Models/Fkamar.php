<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fkamar extends Model{
    use HasFactory;
    protected $primaryKey = "id";

    public function kamar(){
        return $this->belongsTo(Kamar::class);
    }
}
