<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authontroller extends Controller
{
    public function formRegister(){
        return view ('auth.register');
    }
}
