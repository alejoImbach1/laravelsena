<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index',['tituloPagina' => 'Laravel sena']);
    }

    public function webDevelopmentDefault(){
        return view('webdevelopment.default',['tituloPagina' => 'Descripción - desarrollo web']);
    }
}
