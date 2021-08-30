<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PersonalinfoController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::resource('service', ServiceController::class );
    Route::resource('project', ProjectController::class );
    Route::resource('personalinfo', PersonalinfoController::class );
    Route::resource('links', LinkController::class );
    Route::resource('technologies', TechnologyController::class );



});
require __DIR__.'/auth.php';
