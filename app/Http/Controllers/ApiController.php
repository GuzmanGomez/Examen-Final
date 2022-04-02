<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function actividad()
    {
        //consumir api bored
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.boredapi.com/api/activity');
        $datos = json_decode($response->getBody()->getContents(), true);

        //recorrer elementos de la api
        $actividades = [];
        foreach ($datos['results'] as $actividad) {
            $actividades[] = [
                "activity" => $actividad['activity'],
                "type" => $actividad['type'],
                "participants" => $actividad['participants'],
                "price" => $actividad['price'],
                "link" => $actividad['link'],
                "keywords" => $actividad['keywords'],
                "accessibility" => $actividad['accessibility']
            ];
        }

        return view("contact",["actividades" => $actividades]);
        
    }
    

}
