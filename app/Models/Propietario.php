<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Escudo;

class Propietario extends Model
{
    use HasFactory;
    public function escudos()
    {
        return $this->hasMany(Escudo::class);
    }
}
