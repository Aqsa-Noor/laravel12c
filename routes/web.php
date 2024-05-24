<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\practiceController;

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
Route::get('/index',[MyFirstController::class,'myData']);

Route::get('/practindex',[practiceController::class,'getdata']);

Route::get('/practinsert', function(){
    return view('practinsert');
});
Route:: post('/practinsert',[practiceController::class,'insertdata']);

Route::get('/insert', function () {
    return view('insert');
});
Route::post('/insert',[MyFirstController::class,'insertData']);


Route::get('/select',[MyFirstController::class,'showData']);

Route::get('/practselect',[practiceController::class,'selectdata']);

Route::get('/update/{id}', [MyFirstController::class,'showUpdatedData'] );
Route::post('/update',[MyFirstController::class,'updateData']);

Route::get('/practupdate/{id}', [practiceController::class,'showupdateddata']);
Route::get('/delete/{id}', [MyFirstController::class,'Delete']);