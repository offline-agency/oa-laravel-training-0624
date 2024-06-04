<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
 *
    Route::group(['as' => 'contact.', 'prefix' => 'contact', 'namespace' => 'Contact', 'middleware' => ['bakery-admin']], function () {
        Route::post('/', [ContactsController::class, 'showForm'])->name('show-form');
        Route::post('/store', [ContactsController::class, 'store'])->name('store');
    });
 *
 * */
