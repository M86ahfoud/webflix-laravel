<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // on va faire appel sur l'API de the Movie DB

        $response = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=ebc0a4ad59da5f80113ec7d1142c72a7&language=fr');

        $genres = $response->json() ['genres'];

        foreach ($genres as $genre) {

            Category:: factory()->create([
                
                'id' => $genre['id'],
                
                'name' => $genre['name']
            ]);
        }

        //Category::factory(30)->create();

        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=ebc0a4ad59da5f80113ec7d1142c72a7&language=fr');

        $movies =  $response->json() ['results'];

        foreach ($movies as $movie) {

            Movie:: factory()->create([
                'title' => $movie['title'],
                'synopsys' => $movie['overview'],
                'released_at' => $movie['release_date'],
             'cover' => 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'], 
             
             'category_id' => $movie['gener_ids'][0]
            ]);
        }
        
        
        Movie::factory(30)->create();

        

        
    }
}
