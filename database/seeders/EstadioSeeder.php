<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $nombres = ["Estadio Azteca","Estadio Rungrado Primero de Mayo","Michigan Stadium","Melbourne Cricket Ground","Estadio Camp Nou","Estadio Soccer City"];
        $paises = ["Mexico","Argentina","USA","Australia","Spain","Germany"];
        $ciudades = ["Ámsterdam","Mánchester","Copenhague","Nueva York","Montreal","Praga","Tel Aviv"];

        for ($i=0; $i <15; $i++) {           
            DB::table('estadios')->insert([
                'nombre' => $nombres[rand(0,count($nombres)-1)],
                'pais' => $paises[rand(0,count($paises)-1)],
                'ciudad' => $ciudades[rand(0,count($ciudades)-1)],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
