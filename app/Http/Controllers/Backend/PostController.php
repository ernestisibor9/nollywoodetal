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
         // create new manager instance with desired driver
         $manager = new ImageManager(new Driver());

         $image = $request->file('post_image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
 
         // read image from file system
         $img = $manager->read($image);
        //  $img = $img->resize(600, 400);
 
         // save modified image in new format 
         $img->toJpeg(80)->save(base_path('public/upload/post/'.$name_gen));

 
 
         $save_url = 'upload/post/'.$name_gen;
 
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
            // create new manager instance with desired driver
            $manager = new ImageManager(new Driver());

            $image = $request->file('post_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            // read image from file system
            $img = $manager->read($image);
            // $img = $img->resize(600, 400);

            // save modified image in new format 
            $img->toJpeg(80)->save(base_path('public/upload/post/'.$name_gen));

            $save_url = 'upload/post/'.$name_gen;

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
