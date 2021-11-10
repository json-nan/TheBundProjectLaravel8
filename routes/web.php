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

Route::middleware(\App\Http\Middleware\LocationMiddleware::class)->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'designers' => \App\Models\Designer::inRandomOrder()->with(['portfolios', 'socialNetworks'])->limit(10)->get()
        ]);
    });

    Route::get('about-us', function () {
        return Inertia::render('AboutUs');
    });

    Route::get('designers', [\App\Http\Controllers\DesignerController::class, 'index']);
    Route::get('podcasts', [\App\Http\Controllers\PodcastController::class, 'index']);
    Route::get('rooms', [\App\Http\Controllers\WorkshopController::class, 'index']);
});

Route::get('change-lang/{lang}', function (\Illuminate\Http\Request $request, $lang) {
    if (collect(['es', 'en'])->contains($lang)) {
        session()->put('lang', $lang);
    } else {
        session()->get('lang', 'es');
    }

    return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
