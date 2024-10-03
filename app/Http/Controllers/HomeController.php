<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function login(){
        return view('home.login');
    }

    public function usuario(){
        return view('home.usuario');
    }
    public function cambdojo(){
        return view('home.cambdojo');
    }
    public function cambcontra(){
        return view('home.cambcontraseña');
    }
    public function cambcorreo(){
        return view('home.cambcorreo');
    }
    public function cuentanueva(){
        return view('home.cuentanueva');
    }

}