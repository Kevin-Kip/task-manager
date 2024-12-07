<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);

Route::prefix('task')->name('task.')->controller(TaskController::class)->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');
});
