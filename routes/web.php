<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/',[HomeController::class,'index']);
route::get('/login',[HomeController::class,'login']);