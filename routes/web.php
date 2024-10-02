<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AdsController;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function(){

    // user route
    Route::get('users', [UserController::class, 'index']);
    Route::get('add-user',[UserController::class,'create']);
    Route::post('store-user',[UserController::class,'storeUser']);
    Route::get('user-delete/{id}', [UserController::class, 'userDelete']);
    Route::get('user-edit/{id}', [UserController::class, 'editUser']);
    Route::post('update-user/{id}', [UserController::class, 'updateUser']);
    Route::get('trashed-users', [UserController::class, 'showTrashedUsers']);
    Route::get('restore-user/{id}', [UserController::class, 'restoreUser']);
    Route::get('delete-user/{id}', [UserController::class, 'deleteUser']);

    // setting route
    Route::get('settings', [SettingController::class, 'index']);
    Route::get('add-setting',[SettingController::class,'create']);
    Route::post('store-setting',[SettingController::class,'storeSetting']);
    Route::get('setting-edit/{id}', [SettingController::class, 'editSetting']);
    Route::post('update-setting/{id}', [SettingController::class, 'updateSetting']);

    // payment route
    Route::get('payments', [PaymentController::class, 'index']);
    Route::get('payment-edit/{id}', [PaymentController::class, 'editPayment']);
    Route::post('update-payment/{id}', [PaymentController::class, 'updatePayment']);

    // city route
    Route::get('cities', [CityController::class, 'index']);

    //ad route
    Route::get('ads', [AdsController::class, 'index']);
    Route::get('ads-view/{id}', [AdsController::class, 'show']);
    Route::post('/update-payment-status', [AdsController::class, 'updatePaymentStatus']);
    Route::post('/update-publication-status', [AdsController::class, 'updatePublicationStatus']);


    Route::get('create-mail', function(){
        return view('admin.mail.create');
    });


    // logout route
    Route::get('logout', function(){
        Auth::logout();

        return redirect('login');
    });

});



Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
