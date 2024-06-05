<?php

use App\Http\Controllers\Contact\ContactsController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'contact.', 'prefix' => 'contact', 'namespace' => 'Contact'], function () {
    Route::post('/store', [ContactsController::class, 'store'])->name('store');
});
