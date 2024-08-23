<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/teste', [Controller::class, 'teste']);
Route::get('/sucesso', [Controller::class, 'testesucesso']);
Route::get('/user/{id?}', [Controller::class, 'usuario']);
Route::fallback([Controller::class,'pagina404']);




