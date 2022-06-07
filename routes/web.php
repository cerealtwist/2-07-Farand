<?php

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
    return view('index',[
        "title" => "Home",
        "nama" => "Farand",
        "email" => "fdydat@yahoo.co.id",
        "image" => "img.jpg"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Farand",
        "email" => "fdydat@yahoo.co.id",
        "image" => "img.jpg"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]); 
});

use App\Http\Controllers\ContactController;
//  Route::resource('contact',ContactController::class);

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::group(['middleware' =>['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});
