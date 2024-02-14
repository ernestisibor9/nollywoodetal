<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Writer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WritterController extends Controller
{
    //
    // AddCast
    public function AddWriter(){
        $movies = Movie::latest()->get();
        return view("backend.writer.add_writer", compact("movies"));
    }
    // Store Writer
    public function StoreWriter(Request $request){
        $request->validate([
            'name_of_writer' => 'required',
            'movie_id' => 'required',
        ]);
        Writer::insert([
            'name_of_writer' => $request->name_of_writer,
            'movie_id' => $request->movie_id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message'=> 'Writer Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.writer')->with($notification);
    }
    // All Writer
    public function AllWriter(){
        $writers = Writer::latest()->get();
        return view('backend.writer.all_writer', compact('writers'));
    }
    // Edit Cast
    public function EditWriter($id){
        $editWriter = Writer::findOrFail($id);
        $movies = Movie::latest()->get();
        return view('backend.writer.edit_writer', compact('editWriter', 'movies'));
    }
    // Update Cast
    public function UpdateWriter(Request $request){
        $pid = $request->id;

        Writer::findOrFail($pid)->update([
            'name_of_writer' => $request->name_of_writer,
            'movie_id' => $request->movie_id,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Writer Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.writer')->with($notification);
    }
    // Delete Writer
    public function DeleteWriter($id){
        Writer::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Writer Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
