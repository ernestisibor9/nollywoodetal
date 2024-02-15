<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    // Add Genre
    public function AddGenre(){
        $movies = Movie::latest()->get();
        return view("backend.genre.add_genre", compact("movies"));
    }
    // Store Genre
    public function StoreGenre(Request $request){
        $request->validate([
            'genre' => 'required|unique:genres|max:255',
        ]);
        Genre::insert([
            'genre' => $request->genre,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message'=> 'Genre Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.genre')->with($notification);
    }
    // All Genre
    public function AllGenre(){
        $genre = Genre::latest()->get();
        return view('backend.genre.all_genre', compact('genre'));
    }
    // Edit Genre
    public function EditGenre($id){
        $editGenre = Genre::findOrFail($id);
        $movies = Movie::latest()->get();
        return view('backend.genre.edit_genre', compact('editGenre', 'movies'));
    }
    // Update Genre
    public function UpdateGenre(Request $request){
        $pid = $request->id;

        Genre::findOrFail($pid)->update([
            'genre' => $request->genre,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Genre Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.genre')->with($notification);
    }
    // Delete Genre
    public function DeleteGenre($id){
        Genre::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Genre Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
