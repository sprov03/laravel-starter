<?php

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

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dummy-data', function() {
    sleep(2);
    return [
        'data' => 'working'
    ];
});

/** All Web controllers will go here */
Route::middleware('auth')->group(function () {
    Route::fallback(function () {
        if (Auth::check()) {
            /** @var User $user */
            $user = Auth::user();
            $store = [];
        } else {
            $store = [];
        }

        return view('client-app', ['store' => $store]);
    });
});

