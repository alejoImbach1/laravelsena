<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index',['enunciado' => 'Sena laravel']);
    }

    public function webDevelopmentDefault(){
        return view('webdevelopment.index',[
            'enunciado' => 'Desarrollo web',
            'content' => 'webdevelopment.default'
        ]);
    }
}
