<?php

use App\Http\Controllers\Contact\ContactsController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as' => 'contact.', 'prefix' => 'contact', 'namespace' => 'Contact'], function () {
    Route::get('/list', [ContactsController::class, 'list'])->name('list');
});

Route::get('/test-session-put', [SessionController::class, 'testSessionPut'])->name('test-session-put');
Route::get('/test-session-get', [SessionController::class, 'testSessionGet'])->name('test-session-get');
