<?php

use App\Http\Controllers\AddressBookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource("address", AddressBookController::class)->middleware(['auth', 'verified']);

require __DIR__ . '/settings.php';
