<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Producer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // SearchProperty
    public function SearchMovie(Request $request){
        $request->validate([
            'genre_id' => 'required',
            'producer_id' => 'required',
            'country' => 'required',
        ]);
        $country = $request->country;
        $genre = $request->genre_id;
        $producer = $request->producer_id;

        $movie = Movie::where('country', 'like', '%' .$country. '%')->with('genre', 'producer')->whereHas('genre', function($q) use($genre){
            $q->where('genre', 'like', '%' .$genre. '%');
        })
        ->whereHas('producer', function($q) use($producer){
            $q->where('producer_name', 'like', '%' .$producer. '%');
        })->get();


        // $property = Property::where('property_name', 'like', '%' .$propertyName. '%')->orWhere('city', '!==', $city)->orWhere('property_category', '!==', $propertyCategory)->get();
        return view('frontpage.movie.movie_search', compact('movie'));
    }
}
