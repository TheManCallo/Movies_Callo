<?php

namespace App\Http\Controllers; 
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    

    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'game_name' => 'required'
        ]);


        Game::create([
            'movie_name' => $request->title,
            'category' => 'Test Category',
            'descriptiom' => 'Test description',
            'movie_image' => 'Test series',
            'isbn' => 'Test director',
            'artists' => 'public\image\hello.jpg',
            'created_at' => now(),
            'updated_at'  => now()


        ]);

        return to_route('movies.index');

    }

    public function show(Movie $movie)
        {
            return view('movies.show')->with('movie', $movie);
        }

        public function edit(string $id)
        {

        }

        public function update(Request $request, string $id)
        {

        }

        public function destroy(string $id)
        {

        }


}

