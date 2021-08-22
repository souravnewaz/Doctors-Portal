<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\QuestionController;
use App\Http\Controllers\API\AddController;

use App\Http\Controllers\API\TestController;

Route::post('signup',[AuthController::class,'signup']);
Route::post('login',[AuthController::class,'login']);



Route::middleware(['auth:sanctum'])->group(function() {

    Route::post('logout',[AuthController::class,'logout']);
    Route::get('viewAllblog',[BlogController::class,'viewallblog']);
    Route::post('createblog',[BlogController::class,'createblog']);
    Route::get('viewblog',[BlogController::class,'viewblog']);
    Route::get('editblog/{id}',[BlogController::class,'editblog']);
    Route::put('updateblog/{id}',[BlogController::class,'updateblog']);
    Route::delete('deleteblog/{id}',[BlogController::class,'deleteblog']);
    Route::get('getProfile/{name}',[ProfileController::class,'Profile']);
    Route::get('getprofile/{uname}',[ProfileController::class,'getprofile']);
    // Route::put('updateProfile/{id}',[ProfileController::class,'updateprofile']);
    Route::put('updateProfile/{id}', [ProfileController::class,'updateprofile']);
    Route::get('viewappointment',[AppointmentController::class,'viewappointment']);
    Route::delete('deleteAppointment/{id}',[AppointmentController::class,'deleteappointment']);
    Route::get('questionlist',[QuestionController::class,'questionlist']);
    Route::delete('deletequestion/{id}',[QuestionController::class,'deletequestion']);


    Route::get('edittest/{id}',[TestController::class,'edittest']);
    Route::put('updatetest/{id}',[TestController::class,'updatetest']);

    Route::get('getQuestion/{id}',[QuestionController::class,'getquestion']);

    Route::post('availability',[AuthController::class,'add']);
    
    

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


