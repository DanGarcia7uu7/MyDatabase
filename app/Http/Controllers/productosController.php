<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function index(){
        $host = 'localhost';
        $puerto = '27017';
        
        //conexion a la BD
        $conexion = new \MongoDB\Client("mongodb://$host:$puerto");

        $filtrar = array();
        $options = array();
        $collection = $conexion->laravelmongodb->productos1s;
        $datos = $collection->find($filtrar,$options);
        return view('producto', compact('datos'));
    }
}
