<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormKearsitekturanController;
use App\Http\Controllers\FormKartografiController;
use App\Http\Controllers\ArsipKearsitekturanController;
use App\Http\Controllers\ArsipKartografiController;
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

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', [HomeController::class,'index'])->middleware(['auth'])->name('home');


    Route::get('/formkearsitekturan', [FormKearsitekturanController::class,'index'])->name('formkearsitekturan');


    Route::resource('/formkartografi', FormKartografiController::class)->middleware(['auth'])->names('formkartografi');





    Route::get('/arsipkearsitekturan', [ArsipKearsitekturanController::class,'index'])->name('arsipkearsitekturan');
    Route::get('/arsipkearsitekturan', [ArsipKearsitekturanController::class,'index'])->name('arsipkearsitekturan');



    Route::resource('arsipkartografi', ArsipKartografiController::class)->names('arsipkartografi');

    
});







require __DIR__.'/auth.php';
