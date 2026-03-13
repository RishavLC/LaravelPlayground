<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function(){
    return "Hello World";
});
Route::get('/c', [PageController::class, 'hello']);
Route::get('/index', [UserController::class, 'index']);
Route::get('/about', function(){
    return "This is about page";
});
Route::resource('/products', ProductController::class);

Route::get('/form', function () {
    return '
        <form method="POST" action="/submit">
            <input type="text" name="name" placeholder="Enter your name"
            style="padding: 10px; border: 1px solid #ccc; border-radius: 40px; width: 200px;">
            <input type="email" name="email" placeholder="Enter your mail address" 
            style="border: 1px solid #ccc; border-radius: 40px; width: 200px; padding: 10px;">
            <input type="password" name="password" placeholder="Enter your password"
            style="border: 1px solid #ccc; border-radius: 40px; width: 200px; padding: 10px;">
            <input type="number" name="age" placeholder="Enter your age"
            style="border: 1px solid #ccc; border-radius: 40px; width: 200px; padding: 10px;">
            <button type="submit"
            style="padding: 10px 20px; background-color: #2e0b0b; color: white; border: none; border-radius: 40px; cursor: pointer;">Submit</button>
        </form>
    ';
});