<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create', [

            'categories' => Category::all()->sortBy('name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            //vérifier les erreurs;
            'title' => 'required|min:2|unique:movies,title',
            'synopsys' => 'required|min:10',
            'duration' => 'required|numeric',
            'youtube' => 'nullable',
            'cover' => 'required|image|max:1024',
            'released_at' => 'required|date',
            'category' => 'exists:categories,id',

        ]);

        // ajouter un film dans la BDD;
        Movie::create([
            'title' => request('title'),
            'synopsys' => request('synopsys'),
            'duration' => request('duration'),
            'youtube' => request('youtube'),
            // Pour faire l'upload
            'cover' => '/storage/'. request('cover')->store('covers', 'public'), // /storage/covers/123456.jpg
            'released_at' => request('released_at'),
            'category_id' => request('category'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', [
            'movie' => $movie

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
