<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppointmentController;

use App\Models\Question;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'loginApi']);
//questions route 
Route::get('/questions', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Question::latest()->get();
});
Route::post('/questions', [QuestionController::class, 'createApi']);
 
Route::get('questions/{id}', function($id) {
    return Question::find($id);
});

//doctors route
Route::get('/doctors', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Doctor::all();
});
 
Route::get('doctors/{id}', function($id) {
    return Doctor::find($id);
});

//users routes
Route::get('/users', [UserController::class, 'userList']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'create']);
Route::put('/users/{id}', [UserController::class, 'store']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

//appointments route
Route::post('/appointment', [AppointmentController::class, 'createApi']);


//users routes

// Route::get('/users', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return Patient::all();
// });

// Route::post('/user', [UserController::class, 'create']);

// Route::put('user/{id}', [UserController::class, 'store']);

// Route::put('articles/{id}', function(Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('articles/{id}', function($id) {
//     Article::find($id)->delete();

//     return 204;
// });

