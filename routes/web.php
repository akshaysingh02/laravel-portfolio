<?php

use App\Http\Controllers\NewProject;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'landing']);

Route::get('/projects/index',[ProjectController::class, 'index'])->name('projects.index');

Route::get('/projects/show',[ProjectController::class, 'show'])->name('projects.show');

Route::view('form','projects/createproject');

Route::post('submit', [NewProject::class, 'save']);
