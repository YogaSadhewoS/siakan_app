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
})->middleware(['auth', 'verified'])->name('login');

Route::get('/', function () {
    return view('halamanlanding.index');
});

Route::get('/datakearsitekturanuser', [ArsipKearsitekturanController::class,'datakearsitekturanuser'])->name('datakearsitekturanuser');
Route::get('/datakartografiuser', [ArsipKartografiController::class,'datakartografiuser'])->name('datakartografiuser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [HomeController::class,'index'])->middleware(['auth'])->name('home');
    Route::resource('/formkearsitekturan', FormKearsitekturanController::class)->middleware(['admin'])->names('formkearsitekturan');
    Route::resource('/formkartografi', FormKartografiController::class)->middleware(['admin'])->names('formkartografi');
    Route::get('/arsipkearsitekturan/trash', [ArsipKearsitekturanController::class, 'deletedKearsitekturan'])->middleware(['admin'])->name('arsipkearsitekturan.trash');
    Route::get('/arsipkearsitekturan/index/{id}/restore', [ArsipKearsitekturanController::class, 'restore'])->name('arsipkearsitekturan.restore');
    Route::delete('/arsipkearsitekturan/hard-delete/{id}', [ArsipKearsitekturanController::class, 'hardDelete'])->name('arsipkearsitekturan.hardDelete');
    Route::resource('arsipkearsitekturan', ArsipKearsitekturanController::class)->names('arsipkearsitekturan');
    Route::get('/arsipkartografi/trash', [ArsipKartografiController::class, 'deletedKartografi'])->middleware(['admin'])->name('arsipkartografi.trash');
    Route::get('/arsipkartografi/index/{id}/restore', [ArsipKartografiController::class, 'restore'])->name('arsipkartografi.restore');
    Route::delete('/arsipkartografi/hard-delete/{id}', [ArsipKartografiController::class, 'hardDelete'])->name('arsipkartografi.hardDelete');
    Route::resource('arsipkartografi', ArsipKartografiController::class)->names('arsipkartografi');
    
});


require __DIR__.'/auth.php';
