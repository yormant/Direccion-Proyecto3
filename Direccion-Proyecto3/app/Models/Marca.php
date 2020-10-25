<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{

    public function dispositivo(){
        return $this->hasMany(Dispositivo::class);
    }
    use HasFactory;
}
