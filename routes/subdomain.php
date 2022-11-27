<?php

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


// Route::middleware("web")->domain("{account}.homesitters4u.com")->group(function(){
//   Route::get('/test', function(){
//     return "Sup brah";
//   });
// });


Route::get('/', function () {
    return "WASSSSSAP";
});
