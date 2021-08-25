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

Route::get('/dashboard', [Controllers\MainController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::post('/tweets', [Controllers\TweetController::class, 'store'])
    ->middleware(['auth']);

Route::get('/profiles/{user}', [Controllers\ProfileController::class, 'show'])
    ->name('profiles.single');

require __DIR__.'/auth.php';
