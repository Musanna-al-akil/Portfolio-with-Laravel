<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Education;

class EducationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function posts(){
        $posts=Education::all();

        return view('dashboard.mystoryDash.Education.posts',compact('posts'));
    }
    
    public function createPost(){
        return view('dashboard.mystoryDash.Education.createPost');
    }

    public function createPostSubmit(Request $request){
        $this->validate($request,array(
            'Certificate'=>'',
            'discription'=>'',
        ));
 
        $post=new Education();
        $post->certificate_name=$request['Certificate'];
        $post->institute_name=$request['Institute'];
        $post->date=$request['year'];       
        $post->save();
 
        return redirect()->route('Educations')->with('success',"Form Updated Successfully");
    }

    public function editPosts($id){
        $education=Education::where('id',$id)->first();

        return view('dashboard.mystoryDash.Education.editPost',compact('education'));
    }
 
    public function postEditPosts(Request $request,$id){
        $this->validate($request,array(
            'title'=>'',
            'discription'=>'',
        ));
 
        $education=Education::where('id',$id)->first();
        $education->certificate_name=$request['Certificate'];
        $education->institute_name=$request['Institute'];
        $education->date=$request['year'];  
        $education->save();

         return redirect()->route('Educations')->with('success',"Post updated Successfully");
    }
 
    public function postDelete($id){
        $education=Education::where('id',$id)->first();
        $education->delete();

        return back();
    }
}