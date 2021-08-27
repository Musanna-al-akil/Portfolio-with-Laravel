<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\According;
use Auth;
use Storage;

class accordingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function Accordings(){
        $accordings=According::all();

        return view('dashboard.according.accordings',compact('accordings'));
    }

    public function createAccording(){
        return view('dashboard.According.createAccording');
    }

    public function createAccordingSubmit(Request $request){
        $this->validate($request,array(
            'job_title'=>'required|max:200',
            'join_date'=>'required', 
            'discription'=>'required',
            'job_office'=>'required',
        ));
 
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
            $path = $request->file('image')->storeAs('public/image/according',$fileNameToStore);
     
        }else{
            $fileNameToStore ='noimage.jpg';
        }
 
        $according=new According();
        $according->job_title=$request['job_title'];
        $according->job_office=$request['job_office'];
        $according->discription=$request['discription'];
        $according->join_date=$request['join_date'];
        $according->resign_date=$request['resign_date'];
        $according->image=$fileNameToStore;
        $according->save();
 
        return redirect()->route('createAccordingSubmit')->with('success',"Form Updated Successfully");
    }

    public function editAccordings($id){
        $according=According::where('id',$id)->first();

        return view('dashboard.according.editAccording',compact('according'));
    }

    public function AccordingEditPosts(Request $request,$id){
        $this->validate($request,array(
            
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
             $path = $request->file('image')->storeAs('public/image/according',$fileNameToStore);
        }

        $according=According::where('id',$id)->first();
        $according->job_title=$request['job_title'];
        $according->job_office=$request['job_office'];
        $according->discription=$request['discription'];
        $according->join_date=$request['join_date'];
        $according->resign_date=$request['resign_date'];
        if($request->hasFile('image')){
            Storage::delete('image/according/'.$post->image);
            $according->image=$fileNameToStore;
        }
        $according->save();

        return redirect('admin/accordings')->with('success',"According edited Successfully");
    }
    
    public function AccordingDelete($id){
        $according=According::where('id',$id)->first();
        Storage::delete('image/according'.$according->image);
        $according->delete(); 

        return back();
    }
}