<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

use App\Http\Requests\CreatePost;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function posts(){
        $posts=Post::all();

        return view('dashboard.post.posts',compact('posts'));
    }

    public function createPost(){
         return view('dashboard.post.createPost');
    }

    public function createPostSubmit(CreatePost $request){
 
        if($request->hasFile('image')){
            //Get filename with the extension
            $id=Auth::id();
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //GET just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore =$id.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image/post',$fileNameToStore);
     
        }else{
            $fileNameToStore ='noimage.jpg';
        }
 
        $post=new Post();
        $post->title=$request['title'];
        $post->discription=$request['content'];  
        $post->image=$fileNameToStore;     
        $post->save();
 
        return redirect()->route('createPostSubmit')->with('success',"Form Updated Successfully");
    }
    
    public function editPosts($id){
        $post=Post::where('id',$id)->first();

        return view('dashboard.post.editPost',compact('post'));
    }
 
    public function postEditPosts(Request $request,$id){
        $this->validate($request,array(
            'title'=>'',
            'discription'=>'',
        ));
        if($request->hasFile('image')){
            $ids=Auth::id();
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //GET just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $ids.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image/post',$fileNameToStore);
        }
    
        $post=Post::where('id',$id)->first();
        $post->title=$request['title'];
        $post->discription=$request['discription'];
        if($request->hasFile('image')){
            Storage::delete('image/post/'.$post->image);
            $post->image=$fileNameToStore;
        }
        $post->save();

        return redirect('admin/posts')->with('success',"Post updated Successfully");
    }
 
    public function postDelete($id){
        $post=Post::where('id',$id)->first();
        Storage::delete('image/post/'.$post->image);
        $post->delete();

        return back();
    }
}
