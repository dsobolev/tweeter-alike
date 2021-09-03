<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [Controllers\MainController::class, 'index'])
        ->name('dashboard');

    Route::post('/tweets', [Controllers\TweetController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [Controllers\ProfileController::class, 'follow'])
        ->name('follow');
    Route::post('/profiles/{user:username}/unfollow', [Controllers\ProfileController::class, 'unfollow'])
        ->name('unfollow');
});

Route::get('/profiles/{user:username}', [Controllers\ProfileController::class, 'show'])
    ->name('profiles.single');

require __DIR__.'/auth.php';
