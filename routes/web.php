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

    //parametri da passare
    $nav_links = [
        'Bulbasaur' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png',
        'Charmender' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png',
        'Squirtle' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/7.png',
        'Chikorita' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/152.png',
        'Cyndaquil' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/155.png',
        'Totodile' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/158.png'
    ];

    return view(
        'home',
        compact('nav_links')
    );
});

Route::get('/about', function () {

    //parametri da passare
    $nav_links = [
        'Hello' => '#',
        'My' => '#',
        'Name' => '#',
        'Is' => '#',
        'Jack' => '#',
        'Sparrow' => '#'
    ];

    return view(
        'about',
        compact('nav_links')
    );
});

Route::get('/contacts', function () {

    //parametri da passare
    $nav_links = [
        'You' => '#',
        'Can' => '#',
        'Find' => '#',
        'Me' => '#',
        'In' => '#',
        'Lisboa' => '#'
    ];

    return view(
        'contacts',
        compact('nav_links')
    );
});
