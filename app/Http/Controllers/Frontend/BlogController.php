<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // BlogDetails
    public function BlogDetails($slug){
        $blog = Post::where('post_slug', $slug)->first();
        return view('frontpage.blog.blog_details', compact('blog'));
    }
    // Store Comment
    public function StoreComment(Request $request){
        $pid = $request->post_id;

        // Insert into database
        Comment::insert([
            'name'=>$request->name,
            'email' => $request->email,
            'post_id' => $pid,
            'parent_id' => null,
            'content' => $request->content,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Comment Inserted Successfully',
            'alert-type'=>'success'
    );
        return redirect()->back()->with($notification);
    }
    // Add Reply
    public function AddReply(Request $request){
        // $pid = $request->post_id;

        // Insert into database
        Reply::insert([
            'comment_id'=>$request->commentId,
            'reply' => $request->reply,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message'=> 'Reply Inserted Successfully',
            'alert-type'=>'success'
    );
        return redirect()->back()->with($notification);
    }
    // AllBlog
    public function AllBlog(){
        $allBlog = Post::latest()->paginate(3);
        return view('frontpage.blog.all_blog', compact('allBlog'));
    }



    // Search 
    // public function SearchPost(Request $request){
    //     $post = $request->post;

    //     $postSearch = Post::where('post_title', 'like', '%' .$post. '%')->orWhere('author', 'like', '%' .$post. '%')->get();

    //     return view('frontpage.blog.post_search', compact('postSearch'));
    // }
}
