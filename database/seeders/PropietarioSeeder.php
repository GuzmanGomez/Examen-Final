<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = ["Alejandro","Álvaro","Ana","Emma","Isabel","Juan","Luis","María","Pedro","Sofía","Tomás"];
        $edad = [20,21,22,23,24,25,26,27,28,29,30];

        for ($i=0; $i <15; $i++) {           
            DB::table('propietarios')->insert([
                'nombre' => $nombres[rand(0,count($nombres)-1)],
                'edad' => $edad[rand(0,count($edad)-1)],
                'created_at' => now(),
                'updated_at' => now()
            ]); 
        }
    }
}
