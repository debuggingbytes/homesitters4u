<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Js;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/{email}/', function(Request $request, $email){

  // print json_encode($request->verified);
  //When user submits email address to contact form
  if(!$request->verified){
    return false;
  }
  
  return json_encode("$email as successfully added to the mailing list");
  

});