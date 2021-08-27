<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Str;

class TagController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $tags=Tag::all();

        return view('dashboard.resource.tag.index',compact('tags'));
    }

    public function store(Request $request){
        $this->validate($request,array(
            'name'=>'required|max:60'
        ));
        $tag=new Tag;

        $tag->tag_name=$request->name;
        $tag->slug=Str::slug($request->name);
        $tag->save();

        return redirect()->route('tag.index')->with('sucess','Upadated Tag');
    }

    public function update(Request $request){
        $data=Tag::all();
        foreach ($data as $d) {
            $b='name' .$d->id;
            $this->validate($request,array(
            $b=>'required|max:60'
            ));
            $category=Tag::find($d->id);
            $category->tag_name=$request->$b;
            $category->slug=Str::slug($request->$b);
            $category->save();
        }
        
        return redirect()->back()->with('success',"Tag Updated Successfully");
    }

    public function destroy($id){
        $user=Tag::where('id',$id)->delete();

        return redirect()->back()->with('success',"Tag Deleted Successfully");
    }
}

