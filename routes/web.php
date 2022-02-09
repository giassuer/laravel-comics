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
    $comics_array = config('comics');

    $data = [
        'comics' => $comics_array,
        'menu' => [
            [
                'img' => 'images/buy-comics-digital-comics.png',
                'text' => 'DIGITAL COMICS'
            ],
            [
                'img' => 'images/buy-comics-merchandise.png',
                'text' => 'DC MERCHANDISING'
            ],
            [
                'img' => 'images/buy-comics-subscriptions.png',
                'text' => 'SUBSCRIPTION'
            ],
            [
                'img' => 'images/buy-comics-shop-locator.png',
                'text' => 'COMIC SHOP LOCATOR'
            ],
            [
                'img' => 'images/buy-comics-digital-comics.png',
                'text' => 'DC POWER VISA'
            ]
        ]
    ];
    
    return view('layouts.app', $data);
});
