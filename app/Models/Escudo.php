<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipo;
use App\Models\Estadio;
use App\Models\Propietario;

class Escudo extends Model
{
    use HasFactory;
    public function esquipos (){
        return $this->belongsToMany(Equipo::class);

    }

    public function estadios (){
        return $this->belongsToMany(Estadio::class);

    }

    public function propietarios (){
        return $this->belongsToMany(Propietario::class);

    }
}
