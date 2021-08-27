<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Distinction;

class DistinctionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function posts(){
        $distinctions=Distinction::all();

        return view('dashboard.mystoryDash.Distinction.posts',compact('distinctions'));
    }

    public function createPost(){
        return view('dashboard.mystoryDash.Distinction.createPost');
    }

    public function createPostSubmit(Request $request){
        $this->validate($request,array(
            'Certificate'=>'',
            'discription'=>'',
        ));
 
        $distinction=new Distinction();
        $distinction->award=$request['award'];
        $distinction->place=$request['place'];
        $distinction->date=$request['date'];       
        $distinction->save();
 
        return redirect()->route('Distinctions')->with('success',"Form Updated Successfully");
    }

    public function editPosts($id){
        $distinction=Distinction::where('id',$id)->first();

        return view('dashboard.mystoryDash.Distinction.editPost',compact('distinction'));
    }
 
    public function postEditPosts(Request $request,$id){
        $this->validate($request,array(
            'title'=>'',
            'discription'=>'',
        ));
 
        $distinction=Distinction::where('id',$id)->first();
        $distinction->award=$request['award'];
        $distinction->place=$request['place'];
        $distinction->date=$request['date'];       
        $distinction->save();

        return redirect()->route('Distinctions')->with('success',"Post updated Successfully");
    }
 
    public function postDelete($id){
        $distinction=Distinction::where('id',$id)->first();
        $distinction->delete();

        return back();
    }
}