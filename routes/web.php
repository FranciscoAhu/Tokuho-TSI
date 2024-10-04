<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/',[HomeController::class,'index']);
route::get('/inicio',[HomeController::class,'inicio']);
route::get('/admin',[HomeController::class,'admin']);
route::get('/editar',[HomeController::class,'editar']);
route::get('/cambiocontraseña',[HomeController::class,'cambcontra']);
route::get('/borrar',[HomeController::class,'borrar']);
