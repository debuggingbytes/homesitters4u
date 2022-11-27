<?php

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/contact', function (Request $request) {

  $validation = $request->validate([
    'email' => 'required|unique:emails,email',
    'verified' => 'required'
  ]);

  if (!$validation) {
    return response()->json([
      'success' => false,
      'message' => 'API Failed validation',
      // 'errors' => $request->errors()
    ]);
  }

  $email = Email::create([
    'email' => $request->email
  ]);

  if ($email) {
    $response = [
      'message' => 'API Success',
      'email' => 'Yes'
    ];
    return response(json_encode($response), 200);
  } else {
    return response(json_encode('Error with creating email'), 300);
  }
  // return json_encode($request->email);
});


Route::any("/", function () {
  // dd($request);
  $token = csrf_token();
  return "Hello " . $token;
});
