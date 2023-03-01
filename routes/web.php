<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/candlestick-data', function () {
    $data = [
        [
            't' => '2022-01-01',
            'o' => 10,
            'h' => 15,
            'l' => 5,
            'c' => 12,
        ],
        [
            't' => '2022-01-02',
            'o' => 12,
            'h' => 17,
            'l' => 9,
            'c' => 15,
        ],
        // add more data as needed
    ];

    return response()->json($data);
});
