<?php

use App\Http\Controllers\PolitessController;
use App\Models\Category;
use App\Models\Movie;
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

Route::get('/bonjour', [PolitessController::class, 'helloEveryone']);

Route::get('/au-revoir', [PolitessController::class, 'goodBye']);

Route::get('/bonjour/{name}', [PolitessController::class, 'helloSomone']);

Route::get('/a-propos', [PolitessController::class, 'TotoMama']);


Route::get('/a-propos/{user}', [PolitessController::class, 'TotoShow']);



Route::get('/categories/creer', function () {

    return view('categories.create');
});


Route::post('/categories/creer', function () {

    //vérifier les erreurs; 

    request()->validate([

        'name' => 'required|min:3|max:10',
        //'email' => 'required|email',
    ]);

    //dump(request('name'));

    // s'il y'a pas d'erreur , on crée la catégorie 

    Category::create([

        'name' => request('name'),
    ]);

    return redirect('/exercice/categories');
});







Route::get('/exercice/categories', function (){
    return view ('exercice.categories',[
        'categories' => Category::all()
    ]); 
});

Route::get('/exercice/categories/creer', function () {

    $category = Category::create(
        [
            'name' => 'Test'
        ]
        );

        return redirect('/exercice/categories');


});

Route::get('/exercice/categories/{id}', function($id){

    dump($id);

    $category = Category::find($id);

    return $category->name;

});

Route::get('/exercice/films', function (){

    return view ('exercice.films', [

        'movies' => Movie::all()
            
        ]);
});



Route::get('/exercice/films/creer', function() {

    $movie = Movie::create(

      [
            'title' => 'Bala',
            'synopsys' => 'gaba',
            'duration' =>  5,
            'cover' => 'null',
      ]  
      );

      return redirect('/exercice/films/');
});




Route::get('/exercice/films/{id}', function($id){

    $movie = Movie::find($id);

    return view('exercice.aman', [

        'movie' => $movie

    ]);


});