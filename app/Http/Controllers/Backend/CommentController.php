<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // All Comment
    public function AllComment(){
        $comment = Comment::where('parent_id', null)->latest()->get();
        return view('backend.comment.all_comment', compact('comment'));
    }
    // Admin Comment Reply
    // AdminCommentReply
    public function AdminCommentReply($id){
        $comment = Comment::where('id', $id)->first();
        return view('backend.comment.reply_comment', compact('comment'));
    }
    //
    public function ReplyMessage(Request $request){
        $id = $request->id;
        $pid = $request->post_id;
        $name = $request->name;
        $email = $request->email;
         // Insert into database
         Comment::insert([
            'name'=>$name,
            'email' => $email,
            'post_id' => $pid,
            'parent_id' => $id,
            'content' => $request->content,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Reply Inserted Successfully',
            'alert-type'=>'success'
    );
    return redirect()->back()->with($notification);
    }
}
