<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Producer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    // AddProducer
    public function AddProducer(){
        $movies = Movie::latest()->get();
        return view("backend.producer.add_producer", compact("movies"));
    }
    // StoreProducer
    public function StoreProducer(Request $request){
        $request->validate([
            'producer_name' => 'required|unique:producers|max:255',
        ]);
        Producer::insert([
            'producer_name' => $request->producer_name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message'=> 'Producer Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.producer')->with($notification);
    }
    // AllProducer
    public function AllProducer(){
        $producers = Producer::latest()->get();
        return view('backend.producer.all_producer', compact('producers'));
    }
    // EditProducer
    public function EditProducer($id){
        $editProducer = Producer::findOrFail($id);
        $movies = Movie::latest()->get();
        return view('backend.producer.edit_producer', compact('editProducer', 'movies'));
    }
    // UpdateProducer
    public function UpdateProducer(Request $request){
        $pid = $request->id;

        Producer::findOrFail($pid)->update([
            'producer_name' => $request->producer_name,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Producer Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.producer')->with($notification);
    }
    // DeleteProducer
    public function DeleteProducer($id){
        Producer::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Producer Deleted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
