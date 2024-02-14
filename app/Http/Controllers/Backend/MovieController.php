<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
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
            'company_id' => 'required',
            'country' => 'required',
            'movie_duration' => 'required',
            'movie_url' => 'required',
            'movie_cover' => 'required'
        ]);
         // create new manager instance with desired driver
         $manager = new ImageManager(new Driver());

         $image = $request->file('movie_cover');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
 
         // read image from file system
         $img = $manager->read($image);
         $img = $img->resize(250, 360);
 
         // save modified image in new format 
         $img->toJpeg(80)->save(base_path('public/upload/movie/cover/'.$name_gen));

 
 
         $save_url = 'upload/movie/cover/'.$name_gen;
 
            Movie::insert([
             'company_id' => $request->company_id,
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
    // ChangePublishStatus
    public function ChangePublishStatus($id){
        $publishedId = Movie::findOrFail($id);

            if($publishedId->published){
                $publishedId->published = 0;
            }
            else{
                $publishedId->published = 1;
            }
            $publishedId->save();

            $notification = array(
                'message'=> 'Published Status Changed Successfully',
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
        return view('backend.movie.edit_movie', compact('editMovie', 'movieData'));
    }
    // Update Movie
    public function UpdateMovie(Request $request){
        $pid = $request->id;
        $oldImg = $request->old_img;

        if($request->file('movie_cover')){
            // create new manager instance with desired driver
            $manager = new ImageManager(new Driver());

            $image = $request->file('movie_cover');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            // read image from file system
            $img = $manager->read($image);
            $img = $img->resize(250, 360);

            // save modified image in new format 
            $img->toJpeg(80)->save(base_path('public/upload/movie/cover/'.$name_gen));

            $save_url = 'upload/movie/cover/'.$name_gen;

            Movie::findOrFail($pid)->update([
                'company_id' => $request->company_id,
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
                'company_id' => $request->company_id,
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
