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
    // AllFilms
    public function AllFilms(){
        $films = Movie::latest()->paginate(3);
        return view("frontpage.film.all_film", compact("films"));
    }
    // GenreFilter
    public function GenreFilter(Request $request){
        $gid = $request->genre_id;

        $movies = Movie::with('genre')->whereHas('genre', function($q) use($gid){
            $q->where('genre_id', 'like', '%' .$gid. '%');
        })->paginate(3);

        return view("frontpage.film.genre_filter", compact("movies"));
    }
    // CountryFilter
    public function CountryFilter(Request $request){
        $request->validate(['country' => 'required']);
        $cid = $request->country;

        $countryData = Movie::where('country', 'like' , '%' .$cid. '%')->paginate(3);

        return view("frontpage.film.country_filter", compact("countryData"));
    }
    // SearchCompany
    public function SearchMovie(Request $request){
        $request->validate(['movie_title' => 'required']);
        $movieSearch = $request->movie_title;

        $movies = Movie::where('movie_title', 'like', '%' .$movieSearch. '%')->paginate(3);
        return view('frontpage.film.movie_search', compact('movies'));
    }
}
