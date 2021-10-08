<?php

use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\TagController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\VideoController;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::group([ 'middleware' => 'auth','prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', [DashboardController::class,'index'])->name('home');
    Route::resource('categories',CategoryController::class)->except('show');
    Route::resource('tags',TagController::class)->except('show');
    Route::get('trashed',[ArticleController::class,'trashed'])->name('articles.trashed');
    Route::get('trashed/restore/{id}',[ArticleController::class,'restore'])->name('trashed.restore');
    Route::resource('articles',ArticleController::class)->except('show');
    Route::resource('videos',VideoController::class)->except('show');
    Route::resource('users',UserController::class)->except('show');


    });


});
