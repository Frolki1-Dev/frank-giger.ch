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

use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome', [
        'social' => config('project.social'),
        'age' => Carbon::createFromDate(1997, 4, 11)->diff(Carbon::now())->format('%y'),
    ]);
});
