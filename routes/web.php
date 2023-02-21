<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NgundanginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NgundanginController::class, 'index']);
Route::get('/{link}', [NgundanginController::class, 'ngundangin']);
Route::get('/{link}/{tamu}', [NgundanginController::class, 'ngundangin2']);
Route::get('/pesan/isi/{id}', [NgundanginController::class, 'pesan']);
Route::post('/pesan/in/{id}', [NgundanginController::class, 'pesanin']);
// Route::get('/tes/tes', [UserController::class, 'tes']);

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/akun/daftar/index', [UserController::class, 'daftar']);
    Route::post('/akun/daftar/add', [UserController::class, 'register']);

    /**
     * Login Routes
     */
    Route::get('/akun/login/index', [UserController::class, 'login']);
    Route::post('/akun/login/auth', [UserController::class, 'login_action']);

});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/akun/log/out', [UserController::class, 'logout']);

    /**
     * Panel Routes
     */
    Route::get('/akun/panel/index', [PanelController::class, 'index']);
    
    //Panel Resepsi
    Route::get('/akun/panel/resepsi', [PanelController::class, 'resepsi']);
    Route::post('/akun/panel/resepsiin', [PanelController::class, 'resepsiin']);
  
    //Panel Sambutan
    Route::get('/akun/panel/sambutan', [PanelController::class, 'sambutan']);
    Route::post('/akun/panel/sambutanin', [PanelController::class, 'sambutanin']);
  
    //Panel Cerita
    Route::get('/akun/panel/cerita', [PanelController::class, 'cerita']);
    Route::post('/akun/panel/ceritain', [PanelController::class, 'ceritain']);
    Route::post('/akun/panel/ceritaedit/{id}', [PanelController::class, 'ceritaedit']);
    Route::post('/akun/panel/ceritadelete/{id}', [PanelController::class, 'ceritadelete']);
  
    //Panel Ceremonies / Adat
    Route::get('/akun/panel/ceremonies', [PanelController::class, 'ceremonies']);
    Route::post('/akun/panel/ceremoniesin', [PanelController::class, 'ceremoniesin']);
  
    //Panel Galeri
    Route::get('/akun/panel/galeri', [PanelController::class, 'galeri']);
    Route::post('/akun/panel/galeriin', [PanelController::class, 'galeriin']);
    Route::post('/akun/panel/galeridelete/{id}', [PanelController::class, 'galeridelete']);

    //Panel Lagu
    Route::get('/akun/panel/lagu', [PanelController::class, 'lagu']);
    Route::post('/akun/panel/laguin', [PanelController::class, 'laguin']);

    //Panel Pesan
    Route::get('/akun/panel/pesan', [PanelController::class, 'pesan']);  
    Route::post('/akun/panel/pesandelete/{id}', [PanelController::class, 'pesandelete']);

    //Panel User
    Route::get('/akun/panel/akun', [PanelController::class, 'akun']);
    Route::post('/akun/panel/akunedit', [PanelController::class, 'akunedit']);
});