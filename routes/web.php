<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/',[HomeController::class,'index']);
route::get('/login',[HomeController::class,'login']);
route::get('/usuario', [HomeController::class,'usuario']);
route::get('/cambiodojo',[HomeController::class,'cambdojo']);
route::get('/cambiocontraseña',[HomeController::class,'cambcontra']);
route::get('/cambiocorreo',[HomeController::class,'cambcorreo']);
route::get('/cuentanueva',[HomeController::class,'cuentanueva']);