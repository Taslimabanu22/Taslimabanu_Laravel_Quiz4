<?php

use App\Http\Controllers\JobRequestController;

Route::get('/jobrequest', [JobRequestController::class, 'create'])->name('jobrequests.create');
Route::post('/jobrequest', [JobRequestController::class, 'store'])->name('jobrequests.store');
Route::get('/jobrequests', [JobRequestController::class, 'index'])->name('jobrequests.index');
