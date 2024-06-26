<?php

use App\Http\Controllers\Contact\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as' => 'contact.', 'prefix' => 'contact', 'namespace' => 'Contact'], function () {
    Route::get('/list', [ContactsController::class, 'list'])->name('list');
});
