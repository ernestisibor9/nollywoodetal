<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class PostController extends Controller
{
    // Add Post
    public function AddPost(){
        return view("backend.post.add_post");
    }
    // Store Post
    public function StorePost(Request $request){
        $request->validate([
            'post_title' => 'required|unique:posts|max:200',
            'author' => 'required',
            'author_email' => 'required',
            'post_image' => 'required',
            'post_content' => 'required',
        ]);

        // Without Imagick
        $image = $request->file('post_image');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('upload/post'), $filename);
 
         $save_url = 'upload/post/'.$filename;
 
            Post::insert([
             'post_title' => $request->post_title,
             'post_slug' => Str::slug($request->post_title),
             'author' => $request->author,
             'author_email' => $request->author_email,
             'post_content' => $request->post_content,
             'post_image' => $save_url,
             'created_at' => Carbon::now(),
         ]);

         $notification = array(
             'message'=> 'Post Inserted Successfully',
             'alert-type'=>'success'
         );
         return redirect()->route('all.post')->with($notification);
    }
    // All Post
    public function AllPost(){
        $postData = Post::latest()->get();
        return view('backend.post.all_post', compact('postData'));
    }
    public function ChangePublishStatus($id){
        $publishedId = Post::findOrFail($id);

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
    // Edit Post
    public function EditPost($id){
        $editPost = Post::findOrFail($id);
        return view('backend.post.edit_post', compact('editPost'));
    }
    // Update Post
    public function UpdatePost(Request $request){
        $pid = $request->id;
        $oldImg = $request->old_img;

        if($request->file('post_image')){
            // Without Imagick
            $image = $request->file('post_image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('upload/post'), $filename);

            $save_url = 'upload/post/'.$filename;

            Post::findOrFail($pid)->update([
             'post_title' => $request->post_title,
             'post_slug' => Str::slug($request->post_title),
             'author' => $request->author,
             'author_email' => $request->author_email,
             'post_content' => $request->post_content,
             'post_image' => $save_url,
             'updated_at' => Carbon::now(),
            ]);
            unlink($oldImg);
        }
        else{
            Post::findOrFail($pid)->update([
             'post_title' => $request->post_title,
             'post_slug' => Str::slug($request->post_title),
             'author' => $request->author,
             'author_email' => $request->author_email,
             'post_content' => $request->post_content,
             'updated_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message'=> 'Post Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.post')->with($notification);
    }
    // Delete Post
    public function DeletePost($id){
        $deleteId = Post::findOrFail($id);
        unlink($deleteId->post_image);

        Post::findOrFail($id)->delete();

        $notification = array(
                'message'=> 'Post Deleted Successfully',
                'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
