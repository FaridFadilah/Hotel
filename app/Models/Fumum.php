<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fumum extends Model{
    use HasFactory;
    
    protected $table = "fumums";
    protected $primaryKey = "id";
}
