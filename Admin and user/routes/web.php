<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\LogoutController;


use App\Http\Middleware\UserAuth;
use App\Http\Middleware\AdminAuth;

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


// Common routes
Route::get('/', function(){
    return view('user.home');
});


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'create']);

Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/doctors/{id}', [DoctorController::class, 'view']);

Route::get('/logout', [LogoutController::class, 'logout']);

// Admin routes
Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin-dashboard', [DashboardController::class, 'index']);

    Route::get('/all-appointments', [AppointmentController::class, 'index']);
    Route::get('/appointments-no/{id}', [AppointmentController::class, 'view']);

    Route::get('/all-blogs', [BlogController::class, 'index']);
    Route::get('/blogs-no/{id}', [BlogController::class, 'view']);

    // Route::get('/all-doctors', [DoctorController::class, 'index']);
    // Route::get('/doctors-no/{id}', [DoctorController::class, 'view']);

    Route::get('/all-notifications', [NotificationController::class, 'index']);
    Route::get('/notifications-no/{id}', [NotificationController::class, 'view']);

    Route::get('/all-questions', [QuestionController::class, 'index']);
    Route::get('/questions-no/{id}', [QuestionController::class, 'view']);

    Route::get('/all-refunds', [RefundController::class, 'index']);
    Route::get('/refunds-no/{id}', [RefundController::class, 'view']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{email}', [UserController::class, 'view']);

    Route::get('/wallet', [WalletController::class, 'index']);
});








// user routes
Route::middleware([UserAuth::class])->group(function () {
    // Route::get('/home', function(){
    //     return view('user.home');
    // });
    Route::get('/appointments', [AppointmentController::class, 'myAppointments']);
    Route::get('/create-appointment/{id}', function(){
        return view('user.appointmentCreate');
    });
    Route::post('/create-appointment/{id}', [AppointmentController::class, 'create']);
    Route::get('/blogs', function(){
        return view('user.blogs');
    });
    Route::get('/blogs/{id}', function(){
        return view('user.blog');
    });

    Route::get('/departments', [DepartmentController::class, 'index']);


    Route::get('/profile/{email}', [UserController::class, 'view']);

    Route::get('/questions', [QuestionController::class, 'index']);
    Route::post('/questions', [QuestionController::class, 'create']);

    Route::get('/questions/{id}', [QuestionController::class, 'question']);

    Route::get('/questions-user/{email}', [QuestionController::class, 'myQuestions']);

    Route::get('/review-create/{id}', [ReviewController::class, 'index']);
    Route::post('/review-create/{id}', [ReviewController::class, 'create']);

    Route::post('/questions/{id}', function(){
        return view('user.question');
    });


});









