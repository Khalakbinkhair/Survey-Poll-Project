<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\LandingController;

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
    return redirect()->route('home');
});

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('user');

Route::get('/change-password', [HomeController::class, 'change_pass'])->name('change_pass');
Route::post('/change-password', [HomeController::class, 'change_pass_post'])->name('change_pass_post');

//Front-end
Route::get('/home', [LandingController::class, 'home'])->name('home');
Route::post('/homeAnswerSubmit', [LandingController::class, 'homeAnswerSubmit'])->name('homeAnswerSubmit');





//Back-end
Route::group(['prefix' => 'admin', 'middleware' => ['AdminIsValid','auth']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin_profile');
    Route::get('staffs', [AdminController::class, 'show_staffs'])->name('show_staffs');
    Route::get('add-staff', [RegisterController::class, 'showRegistrationForm'])->name('add_staff');
    Route::post('add-staff', [RegisterController::class, 'register'])->name('add_staff_post');
    Route::get('edit-staff/{id}', [AdminController::class, 'edit_staff'])->name('edit_staff');
    Route::post('edit-staff', [AdminController::class, 'edit_staff_post'])->name('edit_staff_post');
    Route::get('reset-pass/{id}', [AdminController::class, 'reset_pass'])->name('reset_pass');
    Route::get('staff/delete/{id}', [AdminController::class, 'delete_staff'])->name('delete_staff');
    Route::get('checkout', [PaymentGatewayController::class, 'checkout'])->name('checkout');
    Route::post('checkout_post', [PaymentGatewayController::class, 'checkout_post'])->name('checkout_post');
    Route::get('transactionSuccessful', [PaymentGatewayController::class, 'transactionSuccessful'])->name('transactionSuccessful');
    Route::get('surveyName', [PollController::class, 'surveyName'])->name('surveyName');
    Route::post('surveyNameSubmit', [PollController::class, 'surveyNameSubmit'])->name('surveyNameSubmit');
    Route::get('addSurvey', [PollController::class, 'addSurvey'])->name('addSurvey');
    Route::post('addSurveySubmit', [PollController::class, 'addSurveySubmit'])->name('addSurveySubmit');
    Route::get('pollName', [PollController::class, 'pollName'])->name('pollName');
    Route::post('pollNameSubmit', [PollController::class, 'pollNameSubmit'])->name('pollNameSubmit');
    Route::get('addPoll', [PollController::class, 'addPoll'])->name('addPoll');
    Route::post('addPollStore', [PollController::class, 'addPollStore'])->name('addPollStore');


});