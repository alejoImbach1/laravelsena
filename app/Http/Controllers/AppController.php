<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index');
    }

    public function IndexWebDevelopment(){
        return view('webdevelopment.index')->with('enunciado','Desarrollo web');
    }
}
