<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

route::get('/',[HomeController::class,'index']);


Route::middleware(['auth:sanctum','verified'])->get('/dashboard',
        function (){
   return view('dashboard');
})->name('dashboard');


route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_catagory',[AdminController::class,'view_catagory']);

route::post('/add_catagory',[AdminController::class,'add_catagory']);