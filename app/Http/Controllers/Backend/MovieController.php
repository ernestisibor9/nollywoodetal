<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Producer;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class MovieController extends Controller
{
    // AddMovie
    public function AddMovie(){
        return view("backend.movie.add_movie");
    }
    // StoreMovie
    public function StoreMovie(Request $request){
        $request->validate([
            'movie_title' => 'required|unique:movies|max:200',
            'genre_id' => 'required',
            'producer_id' => 'required',
            'country' => 'required',
            'movie_duration' => 'required',
            'movie_url' => 'required',
            'movie_cover' => 'required'
        ]);
          // Without Imagick
          $image = $request->file('movie_cover');
          $filename = date('YmdHi') . $image->getClientOriginalName();
          $good = $image->move(public_path('upload/movie/cover'), $filename);
 
 
         $save_url = 'upload/movie/cover/'.$filename;
 
            Movie::insert([
             'genre_id' => $request->genre_id,
             'producer_id' => $request->producer_id,
             'movie_title' => $request->movie_title,
             'movie_slug' => strtolower(str_replace('', '-', $request->movie_title)),
             'movie_url' => $request->movie_url,
             'movie_duration' => $request->movie_duration,
             'country' => $request->country,
 
             'description' => $request->description,
             'movie_cover' => $save_url,
             'created_at' => Carbon::now(),
         ]);

         $notification = array(
             'message'=> 'Movie Inserted Successfully',
             'alert-type'=>'success'
         );
         return redirect()->route('all.movie')->with($notification);
    }
    // AllMovie
    public function AllMovie(){
        $movieData = Movie::latest()->get();
        return view('backend.movie.all_movie', compact('movieData'));
    }
    // ChangePublishMovieStatus
    public function ChangePublishMovieStatus($id){
        $publishedId = Movie::findOrFail($id);

        if($publishedId->published){
            $publishedId->published = 0;
        }
        else{
            $publishedId->published = 1;
        }
        $publishedId->save();

        $notification = array(
            'message'=> 'Published Changed Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);     
    }
    // Change Status
    public function ChangeStatus($id){
        $statusId = Movie::findOrFail($id);

        if($statusId->status){
            $statusId->status = 0;
        }
        else{
            $statusId->status = 1;
        }
        $statusId->save();

        $notification = array(
            'message'=> 'Status Changed Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);     
    }
    // EditMovie
    public function EditMovie($id){
        $editMovie = Movie::findOrFail($id);
        $movieData = Movie::latest()->get();
        $genre = Genre::latest()->get();
        $producer = Producer::latest()->get();
        return view('backend.movie.edit_movie', compact('editMovie', 'movieData', 'genre', 'producer'));
    }
    // Update Movie
    public function UpdateMovie(Request $request){
        $pid = $request->id;
        $oldImg = $request->old_img;

        if($request->file('movie_cover')){
            // Without Imagick
          $image = $request->file('movie_cover');
          $filename = date('YmdHi') . $image->getClientOriginalName();
          $image->move(public_path('upload/movie/cover'), $filename);

            $save_url = 'upload/movie/cover/'.$filename;

            Movie::findOrFail($pid)->update([
                'genre_id' => $request->genre_id,
                'producer_id' => $request->producer_id,
                'movie_title' => $request->movie_title,
                'movie_slug' => strtolower(str_replace('', '-', $request->movie_title)),
                'movie_url' => $request->movie_url,
                'movie_duration' => $request->movie_duration,
                'country' => $request->country,
    
                'description' => $request->description,
                'movie_cover' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            unlink($oldImg);
        }
        else{
            Movie::findOrFail($pid)->update([
                'genre_id' => $request->genre_id,
                'producer_id' => $request->producer_id,
                'movie_title' => $request->movie_title,
                'movie_slug' => strtolower(str_replace('', '-', $request->movie_title)),
                'movie_url' => $request->movie_url,
                'movie_duration' => $request->movie_duration,
                'country' => $request->country,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
        }
            $notification = array(
                'message'=> 'Movie Updated Successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('all.movie')->with($notification);
    }
    // Delete Movie
    public function DeleteMovie($id){
        $deleteId = Movie::findOrFail($id);
        unlink($deleteId->movie_cover);

        Movie::findOrFail($id)->delete();

        $notification = array(
                'message'=> 'Movie Deleted Successfully',
                'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
