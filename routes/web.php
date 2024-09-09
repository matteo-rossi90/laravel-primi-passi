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

//route home
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
})->name('home');

//route about us e informazioni
Route::get('/about-us', function(){

    $content = 'Chi siamo';
    return view('about-us', compact('content'));
})->name('about-us');

//route offerte e servizi
Route::get('/pricing', function () {

    $price = "Scegli l'offerta migliore per te";

    $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, culpa. Ipsa, sint corrupti omnis reprehenderit illum hic
    excepturi voluptate fugit blanditiis, possimus iure explicabo officia. Asperiores possimus consequatur quo numquam!';

    return view('pricing', compact('price', 'paragraph'));
})->name('pricing');
