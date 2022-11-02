<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;


Route::get('/',[ShipmentController::class,'show']);
