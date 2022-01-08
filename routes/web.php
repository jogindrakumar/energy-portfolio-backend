<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Models\About;
use App\Models\Project;
use App\Models\Work;
use App\Models\Education;
use App\Models\Skill;

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

    //about routes
    Route::get('/about',[AboutController::class,'About'])->name('about.section');
    Route::post('/Add/profile',[AboutController::class,'AddProfile'])->name('about.store');
    Route::get('/about/edit/{id}',[AboutController::class,'EditProfile']);
    Route::post('/about/update/{id}',[AboutController::class,'Update']);

    //project routes
    Route::get('/project/all',[ProjectController::class,'AllProject'])->name('project.section');
    Route::get('/project/create',[ProjectController::class,'CreateProject'])->name('project.create');
    Route::post('/project/add',[ProjectController::class,'AddProject'])->name('project.store');
    Route::get('/project/edit/{id}',[ProjectController::class,'EditProject']);
    Route::post('/project/update/{id}',[ProjectController::class,'Update']);
    Route::get('/project/delete/{id}',[ProjectController::class,'DeleteProject']);


    // work route
    

     Route::get('/work/all',[WorkController::class,'AllWork'])->name('work.section');
    Route::get('/work/create',[WorkController::class,'CreateWork'])->name('work.create');
    Route::post('/work/add',[WorkController::class,'AddWork'])->name('work.store');
    Route::get('/work/edit/{id}',[WorkController::class,'EditWork']);
    Route::post('/work/update/{id}',[WorkController::class,'Update']);
    Route::get('/work/delete/{id}',[WorkController::class,'DeleteWork']);

    // Education route
    

     Route::get('/education/all',[EducationController::class,'AllEducation'])->name('education.section');
    Route::get('/education/create',[EducationController::class,'CreateEducation'])->name('education.create');
    Route::post('/education/add',[EducationController::class,'AddEducation'])->name('education.store');
    Route::get('/education/edit/{id}',[EducationController::class,'EditEducation']);
    Route::post('/education/update/{id}',[EducationController::class,'Update']);
    Route::get('/education/delete/{id}',[EducationController::class,'DeleteEducation']);

 // Skills and Level route
    

     Route::get('/skill/all',[SkillController::class,'AllSkill'])->name('skill.section');
    Route::get('/skill/create',[SkillController::class,'CreateSkill'])->name('skill.create');
    Route::post('/skill/add',[SkillController::class,'AddSkill'])->name('skill.store');
    Route::get('/skill/edit/{id}',[SkillController::class,'EditSkill']);
    Route::post('/skill/update/{id}',[SkillController::class,'Update']);
    Route::get('/skill/delete/{id}',[SkillController::class,'DeleteSkill']);




});
/* ------------------End---Admin Routes ---------------- */
// 
/* ---------------------About Routes ---------------- */



/* ------------------End---About Routes ---------------- */

Route::get('/', function () {
    $abouts = About::all();
    $projects = Project::all();
    $works = Work::all();
    $educations = Education::all();
    $skills = Skill::all();
    return view('index',compact('abouts','projects','works','educations','skills'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
