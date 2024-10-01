<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
 
    Route::get('/events', function () { 

        //Obtener los eventos
        $events = App\Models\Event::all(); 

        //Asignar cabecera de nuestra datatable
        $heads = ['ID', 'Name', 'Description', 'Status', 'Type', 'Date'];
        
        //retornar vista con parametros
        return view('events', compact('events', 'heads'));
        
    })->name('events');

    Route::get('/events/create', function () { 
        return view('events-create');
    })->name('events.create');
});