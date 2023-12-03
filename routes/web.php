<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\showController;
use App\Http\Controllers\TrainingController;
use NunoMaduro\Collision\Writer;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EducationStageController;
use Illuminate\Http\Request;

Route::get('languageConverter/{locale}', function($locale){
if(in_array($locale, ['ar','en'])){
    session()->put('locale',$locale);
}
return redirect()->back();
})->name('languageConverter');

Route::get('/', function () {
    return view('login.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::resource('users', UserController::class);

    Route::prefix('admin')->group(function () {
        Route::resource('lectures', LectureController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('trainings', TrainingController::class);
    });
    Route::resource('courses', CourseController::class);
Route::resource('lectures', LectureController::class);
    Route::resource('roles', RoleController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::group(['middleware' => ['auth:sanctum']], function () {
//    Route::post('/users',[UserController::class,'index']);
//    Route::put('/users/{user}/edit',[UserController::class,'edit']);
//    Route::delete('/users/{user}',[UserController::class,'destroy']);
// });
require __DIR__.'/auth.php';

