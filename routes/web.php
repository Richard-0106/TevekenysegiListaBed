<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toDoListController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::post('/rendbenVanRoute/{$id}',[toDoListController::class,'rendbenVan']);
Route::post('/rendbenVanRoute/{id}',[toDoListController::class,'rendbenVan'])->name('rendbenVan');
Route::get('/',[toDoListController::class,'index']);
Route::post('/saveItemRoute',[toDoListController::class,'saveItem'])->name('saveItem');

