<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PersonalinfoController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Mail;
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
    return view('homepage.homepage');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::post('/sendmail',function(){
    request()->validate([
        'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'phone'=>'required',
    ]);
        $details=[
            'name'=>request('name'),
            'email'=>request('email'),
            'message'=>request('message'),
            'phone'=>request('phone'),
        ];


        Mail::to($details['email'])->send(new \App\Mail\ContacMe($details));

        return redirect()->route('home');




})->name('mail');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::resource('service', ServiceController::class );
    Route::resource('project', ProjectController::class );
    Route::resource('personalinfo', PersonalinfoController::class );
    Route::resource('links', LinkController::class );
    Route::resource('technologies', TechnologyController::class );



});
require __DIR__.'/auth.php';
