<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('welcome', [
            'movies' => $movies
        ]);
    }

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'thumbnail' => 'required|url',
    //         'released_at' => 'required|date',
    //         
    //     ]);

    //     Movie::create($validatedData);

    //     return redirect('/movies')->with('success', 'Movie added successfully.');
    // }
    
    public function store(Request $request) {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'released_at' => 'required|date',
            'trailer' => 'required|url',
        ]);
    
        // Handle file uploads
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
            $validatedData['thumbnail'] = $thumbnailPath;
        }
    
        // Create the movie
        Movie::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'thumbnail' => $validatedData['thumbnail'],
            'released_at' => $validatedData['released_at'],
            'trailer' => $validatedData['trailer'],
        ]);
    
        // Redirect with success message
        return redirect('/movies')->with('success', 'Movie added successfully.');
    }
    



    public function show(Movie $movie) {
        return view('movie-details', [
            'movie' => $movie
        ]);
    }
}
