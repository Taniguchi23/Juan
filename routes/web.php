<?php

use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiubizPaymentController;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/nosotros', 'nosotros')->name('nosotros');
    Route::get('/servicios', 'servicios')->name('servicios');
    Route::get('/contacto', 'contacto')->name('contacto');
});

Route::post('/enviar-email', [EmailController::class, 'EnviarEmail']);
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');

    /* ----- USUARIOS -----*/
    Route::controller(UsuarioController::class)->group(function () {
        Route::get('/usuarios/index', 'index')->name('admin.usuarios');
    });
});

Route::get('/productos', [NiubizPaymentController::class, 'productos']);
