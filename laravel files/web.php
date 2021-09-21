<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
|---------------------------er---------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('f1', function () {
//     return view('f1');
// });
Route::get('Array', [Usercontroller::class, 'Array']);
Route::get('is_array', [Usercontroller::class, 'is_array']);
Route::get('in_array', [Usercontroller::class, 'in_array']);
Route::get('array_search', [Usercontroller::class, 'array_search']);
Route::get('array_push', [Usercontroller::class, 'array_push']);
Route::get('array_pop', [Usercontroller::class, 'array_pop']);
Route::get('array_unique', [Usercontroller::class, 'array_unique']);
Route::get('array_slice', [Usercontroller::class, 'array_slice']);
Route::get('array_diff', [Usercontroller::class, 'array_diff']);
Route::get('array_sum', [Usercontroller::class, 'array_sum']);
Route::get('array_combine', [Usercontroller::class, 'array_combine']);
Route::get('array_key_exist', [Usercontroller::class, 'array_key_exist']);
Route::get('array_coloum', [Usercontroller::class, 'array_coloum']);
