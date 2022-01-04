<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Models\About;

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
    Route::post('/Add/profile',[AboutController::class,'AddProfile'])->name('about.store');
    Route::get('/about/edit/{id}',[AboutController::class,'EditProfile']);
    Route::post('/about/update/{id}',[AboutController::class,'Update']);


});
/* ------------------End---Admin Routes ---------------- */
// 
/* ---------------------About Routes ---------------- */



/* ------------------End---About Routes ---------------- */

Route::get('/', function () {
    $abouts = About::all();
    return view('index',compact('abouts'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
