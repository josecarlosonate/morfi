<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //pagina antes del login
    public function __invoke(){
        
        // return view('welcome');
        return view('Welcome');
    }
}
