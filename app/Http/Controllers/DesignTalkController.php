<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\DesignTalk;

class DesignTalkController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function posts(){
        $designTalks=DesignTalk::all();

        return view('dashboard.mystoryDash.DesignTalk.posts',compact('designTalks'));
    }

    public function createPost(){
         return view('dashboard.mystoryDash.DesignTalk.createPost');
    }

    public function createPostSubmit(Request $request){
        $this->validate($request,array(
            'Certificate'=>'',
            'discription'=>'',
         ));
 
         $designTalk=new DesignTalk();
         $designTalk->question=$request['question'];
         $designTalk->place=$request['place'];
         $designTalk->date=$request['date'];       
         $designTalk->save();
 
         return redirect()->route('DesignTalks')->with('success',"Form Updated Successfully");
    }
    
    public function editPosts($id){
        $designTalk=DesignTalk::where('id',$id)->first();

        return view('dashboard.mystoryDash.DesignTalk.editPost',compact('designTalk'));
    }
 
    public function postEditPosts(Request $request,$id){
        $this->validate($request,array(
            'title'=>'',
            'discription'=>'',
        ));
 
        $designTalk=DesignTalk::where('id',$id)->first();
        $designTalk->question=$request['question'];
        $designTalk->place=$request['place'];
        $designTalk->date=$request['date'];       
        $designTalk->save();

        return redirect()->route('DesignTalks')->with('success',"Post updated Successfully");
    }
 
    public function postDelete($id){
        $designTalk=DesignTalk::where('id',$id)->first();
        $designTalk->delete();

        return back();
    }
}