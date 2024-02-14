<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // SearchProperty
    public function SearchMovie(Request $request){
        $country = $request->country;
        $genre = $request->genre;
        $producer_name = $request->producer_name;

        $movie = Movie::where('country', 'like', '%' .$country. '%')->get();
        $genre = Genre::where('genre', 'like', '%' .$country. '%')->get();
        $producer_name = Producer::where('genre', 'like', '%' .$country. '%')->get();

        // $property = Property::where('property_name', 'like', '%' .$propertyName. '%')->orWhere('city', '!==', $city)->orWhere('property_category', '!==', $propertyCategory)->get();
        return view('frontpage.property.property_search', compact('property'));
    }
}
