<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;

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


/* ---------------------Admin Routes ---------------- */

Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class,'Index'])->name('login_form');
    Route::post('/login/owner',[AdminController::class,'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard');
    Route::get('/about',[AboutController::class,'About'])->name('about.section');

});
/* ------------------End---Admin Routes ---------------- */
// 
/* ---------------------About Routes ---------------- */



/* ------------------End---About Routes ---------------- */

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';