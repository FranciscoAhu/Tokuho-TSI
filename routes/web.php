<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/',[HomeController::class,'index']);
route::get('/inicio',[HomeController::class,'inicio']);
route::get('/admin',[HomeController::class,'admin']);
