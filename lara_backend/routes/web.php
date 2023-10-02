<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentRegister;
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
//this route will hit the welcome page
/*Route::get('/', function () {
    return view('welcome');
});*/

//this route will hit the register page in get method
/*Route::get('/register', function () {
    return view('register');
});*/
Route::get('/register',[StudentRegister::class,'registerPage']);

//this route will hit the index class in the Demo controller
Route::get('/',[HomeController::class, 'home'])->name('home');

//this route will hit the register class in the userRegister controller
Route::post('/submit',[StudentRegister::class,'register']);

Route::get('/students', [StudentRegister::class, 'view']);

Route::get('/student/delete/{id}', [StudentRegister::class, 'delete'])->name('student.delete');

Route::get('/student/edit/{id}', [StudentRegister::class, 'edit'])->name('student.edit');

Route::put('/update-data/{id}', [StudentRegister::class, 'update'])->name('student.update');
