<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        
        $nombreEquipos = ['Barcelona','Real Madrid','Atlético de Madrid',"America","Atlas","Pumas","Getafe","Manchester"];
        $antiguedad = [1933,1978,1956,1952,1931,1912,1944,1922];

        for ($i=0; $i <15; $i++) {           
            DB::table('equipos')->insert([
                'nombre' => $nombreEquipos[rand(0,count($nombreEquipos)-1)],
                'antiguedad' => $antiguedad[rand(0,count($antiguedad)-1)],            
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }


        
            



        

    }
}