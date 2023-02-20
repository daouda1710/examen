<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ReferentielController;

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




    Route::get('/types/{id}', [TypeController::class, 'show'])->whereNumber('id');
    Route::get('/referentiels/{id}', [ReferentielController::class, 'show'])->whereNumber('id');
   
    Route::get('/', [TypeController::class, 'store'])->name('home');


Route::get('/formulaire/{id}', [FormationController::class, 'show']);

Route::post('/formulaire', [ParticipantController::class, 'store']);
Route::get('/form', [ReferentielController::class, 'store']);

