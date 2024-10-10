<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DetailController;

// Rutas para hacer los CRUD
Route::resource('/company', CompanyController::class);
Route::resource('/user', UserController::class);
Route::resource('/order', OrderController::class);
Route::resource('/payment', PaymentController::class);
Route::resource('/details', DetailController::class);



// Rutas de login / creación de usuarios
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::post('/auth/register', [AuthController::class, 'createUser']);

// Ejemplo de ruta que necesita autenticación
Route::middleware('auth:sanctum')->get('/need-auth', function() { return response()->json("Hello auth user");});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
