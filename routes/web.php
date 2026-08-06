<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SpeedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get(
    '/characters',
    [CharacterController::class, 'dc']
)->name('characters');


Route::get(
    '/characters/page',
    [CharacterController::class, 'dc']
)->name('characters.ajax');

Route::get('/speed', [SpeedController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index'])->name('movies');
Route::get('/movies/{id}', [MovieController::class, 'detail']);
Route::get(
    '/locations',
    [
        LocationController::class,
        'index'
    ]
)
    ->name('locations');



Route::get(
    '/locations/filter',
    [
        LocationController::class,
        'filter'
    ]
)
    ->name('locations.filter');

Route::get(
    '/characters/{slug}',
    [CharacterController::class, 'detail']
)
    ->name('characters.detail');