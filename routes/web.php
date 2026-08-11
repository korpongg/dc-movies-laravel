<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SpeedController;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\OrganizationController;

use Illuminate\Support\Facades\DB;

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
Route::get('/movies/{id}', [MovieController::class, 'detail'])->name('movies.detail');
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

    Route::get('/test', function () {
    return 'Laravel is running!';
});

Route::get(
    '/locations/{slug}',
    [
        LocationController::class,
        'detail'
    ]
)->name('locations.detail');


Route::get('/php-test', function () {
    return 'PHP is running!';
});

Route::get('/db-test', function () {

    $start = microtime(true);

    $count = DB::table('dc_movies')->count();

    $time = (microtime(true) - $start) * 1000;

    return [
        'count' => $count,
        'time_ms' => round($time, 2),
    ];
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get(
    '/teams/{slug}',
    [TeamController::class, 'detail']
)->name('teams.detail');

Route::get(
    '/organizations/{slug}',
    [OrganizationController::class, 'detail']
)->name('organizations.detail');