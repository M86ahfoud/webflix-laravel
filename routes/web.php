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
    return view('accueil');
});

Route::get('/bonjour', function () {

    return view('Hello', [

        'name' => 'Fiorella',
        'numbers' => [1, 2, 3],
    
    ]);
});

Route::get('/au-revoir', function() {

    return view('good-bye'); 
});

Route::get('/bonjour/{name}', function ($name) {

    return view('Hello',[
        'name' => $name,
        'numbers' => [],
    ]);
});

Route::get('/a-propos', function() {

    return view('Toto', [

        'nom' => '/a propos',
        'Tabs' => ['Xavier', 'Mahfoud', 'Stépahen'],
    ]

);

});


Route::get('/a-propos/{user}', function($user) {

    return view('Toto-show', [

        'user' => $user,
       
    ]

);

});
/* 
Route::get('/a-propos/{user}', function ($user) {

    return ;

});
*/
