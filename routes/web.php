<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('notes/createpage',[NoteController::class,'createpage'])->name('notes.createpage');



});
//test routeları başlangic
 Route::get('/mastertest',function (){
     return view('front.layout.master');
 });
 //Note routeları
Route::get('/notes',[NoteController::class,'index'])->name('notes.index');
Route::post('notes/addNote',[NoteController::class,'addNote'])->name('notes.addnote');
