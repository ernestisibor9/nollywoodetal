<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // MovieDetails
    public function MovieDetails($id){
        $movie = Movie::findOrFail($id);
        return view("frontpage.movie.movie_details", compact("movie"));
    }
}
