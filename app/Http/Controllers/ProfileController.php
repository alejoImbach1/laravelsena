<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('webdevelopment.index',[
            'content' => 'webdevelopment.assignments.profile.index'
        ]);
    }
}
