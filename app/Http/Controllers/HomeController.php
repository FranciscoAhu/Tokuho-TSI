<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function inicio(){
        return view('home.inicio');
    }

    public function admin(){
        return view('home.admin');
    }
    
    public function editar(){
        return view('home.editar');
    }

    public function cambcontra(){
        return view('home.cambcontra');
    }
    
    public function borrar(){
        return view('home.borrar');
    }
}