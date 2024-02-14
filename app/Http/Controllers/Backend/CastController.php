<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cast;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CastController extends Controller
{
    // AddCast
    public function AddCast(){
        $movies = Movie::latest()->get();
        return view("backend.cast.add_cast", compact("movies"));
    }
    // Store Cast
    public function StoreCast(Request $request){
        $request->validate([
            'name_of_cast' => 'required',
            'movie_id' => 'required',
        ]);
        Cast::insert([
            'name_of_cast' => $request->name_of_cast,
            'movie_id' => $request->movie_id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message'=> 'Cast Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.cast')->with($notification);
    }
    // All Cast
    public function AllCast(){
        $casts = Cast::latest()->get();
        return view('backend.cast.all_cast', compact('casts'));
    }
    // Edit Cast
    public function EditCast($id){
        $editCast = Cast::findOrFail($id);
        $movies = Movie::latest()->get();
        return view('backend.cast.edit_cast', compact('editCast', 'movies'));
    }
    // Update Cast
    public function UpdateCast(Request $request){
        $pid = $request->id;

        Cast::findOrFail($pid)->update([
            'name_of_cast' => $request->name_of_cast,
            'movie_id' => $request->movie_id,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Cast Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.cast')->with($notification);
    }
    // Delete Cast
    public function DeleteCast($id){
        Cast::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Cast Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
