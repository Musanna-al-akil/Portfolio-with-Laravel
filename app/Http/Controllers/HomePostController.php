<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepost;

class HomePostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function HomePostIndex(){
        $posts=HomePost::all();

        return view('dashboard.homePost',compact('posts'));
    }

    public function HomePostCreate(Request $request){
        $this->validate($request,array(
            'id'=>'required'
        ));

        $post=new HomePost;
        $post->post_id=$request->id;
        $post->save();

        return redirect()->back()->with('success',"Home Post Create Successfully");
    }

    public function HomePostUpdate(Request $request){       
        $data=HomePost::all();
        foreach ($data as $d) {
            $b='name' .$d->id;
            $this->validate($request,array(
            $b=>'required|max:60'
        ));

            $category=HomePost::find($d->id);
            $category->post_id=$request->$b;
            $category->save();
        }  
        return redirect()->back()->with('success',"Home Post Updated Successfully");
    }
    
    public function destroy($id){
        $Post=HomePost::where('id',$id)->delete();

        return redirect()->back()->with('success',"Home Post Delete Successfully");
    }
}