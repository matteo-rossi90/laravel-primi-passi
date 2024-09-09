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

    //titolo della pagina principale
    $title = 'Cartoleria';

    //sottotitolo
    $merch = 'Oggetti in vendita';

    //aggiungere un elenco di oggetti da cancelleria

    $objects = [
        [
            'name'=> 'fogli A4',
            'category' => 'carta',
            'sold' => true
        ],
        [
            'name' => 'pastelli',
            'category' => 'colori',
            'sold' => true
        ],
        [
            'name' => 'penne a sfera',
            'category' => 'penne per scrivere',
            'sold' => false
        ],
        [
            'name' => 'carta trasparente',
            'category' => 'carta',
            'sold' => false
        ],
        [
            'name' => 'temperamatite',
            'category' => 'oggetti e strumenti',
            'sold' => true
        ],
        [
            'name' => 'evidenziatori',
            'category' => 'oggetti e strumenti',
            'sold' => false
        ]
    ];
    return view('home', compact( 'title', 'merch', 'objects'));
});
