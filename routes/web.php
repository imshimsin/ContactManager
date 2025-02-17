<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\XMLImportController;





Route::get('/', [ContactController::class, 'index']);
Route::resource('contacts', ContactController::class);
Route::post('/import-contacts', [XMLImportController::class, 'import'])->name('contacts.import');

// Route::get('/', function () {
//     return view('welcome');
// });