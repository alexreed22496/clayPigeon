<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/pulls', [App\Http\Controllers\PullsController::class, 'index'])->name('home');
    Route::post('/pulls', [App\Http\Controllers\PullsController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowsController::class, 'store']);
    Route::get('/profiles/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])
        ->middleware('can:edit,user')
        ->name('profile.edit');

    Route::patch('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'update']);
});

Route::get('/profiles/{user:username}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile');

Auth::routes();



