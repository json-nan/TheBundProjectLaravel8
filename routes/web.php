<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'designers' => \App\Models\Designer::inRandomOrder()->limit(10)->get()
    ]);
});

Route::get('about-us', function () {
    return Inertia::render('AboutUs');
});

Route::get('designers', [\App\Http\Controllers\DesignerController::class, 'index']);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
