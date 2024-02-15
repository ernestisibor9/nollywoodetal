<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function Contact(){
        return view('frontpage.contact.contact_us');
    }
    // StoreMessage
    public function StoreMessage(Request $request){
        // Insert into database
        Message::insert([
            'name'=>$request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Message Inserted Successfully',
            'alert-type'=>'success'
    );
    return redirect()->back()->with($notification);
    }
}
