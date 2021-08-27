<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Resource;
use App\Resource_tag;
use App\Tag;

use Illuminate\Support\Facades\Storage;
use Str;

class ResourceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function resources(){
        $resources=Resource::all();

        return view('dashboard.resource.resources',compact('resources')); 
    }

    public function newResource(){
        $tags=Tag::all();

        return view('dashboard.resource.newResource')->with('tags', $tags); 
    }

    public function createResource(Request $request){
        $this->validate($request,array(
            'tags'=>'required',
        ));
        if ($request->hasFile('image')) {
            //Get filename with the extension
            $id = Auth::id();
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //GET just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $id . '-' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image/resource', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
           
        $resource=new Resource;
        $resource->title=$request['title'];
        $resource->content=$request['content'];
        $resource->slug=Str::slug($request->title);
        $resource->meta_title=Str::limit($request->title,70);
        $resource->meta_description=Str::limit($request->content,150,'...');
        $resource->image=$fileNameToStore;
        $resource->save();
        //tag   
        $resource->tags()->attach($request->tags);

        return back()->with('success','Resource is successfully Created.');
    }

    public function editResource($id){
        $resource=Resource::where('id',$id)->first();
        $tag=Tag::all();

        return view('dashboard.resource.editResource',compact('resource'))->with('tags', $tag);
     }

    public function editResourcePost(Request $request,$id){
        $this->validate($request,array(
            'title'=>'required|max:60',
            'content'=>'required|string',
            'image'=>'max:1999|image|nullable'
        ));
        if ($request->hasFile('image')) {
            $ids = Auth::id();
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //GET just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $ids . '-' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image/resource', $fileNameToStore);
        }

        $resource=Resource::where('id',$id)->first();
        $resource->title=$request['title'];
        $resource->slug=Str::slug($request->title);
        $resource->meta_title=Str::limit($request->title,70);
        $resource->content=$request['content'];
        $resource->meta_description=Str::limit($request->content,150,'...');
        if($request->hasFile('image')){
            Storage::delete('image/resource/' . $resource->image);
            $resource->image=$fileNameToStore;
        }
        $resource->save();
        $resource->tags()->sync($request->tags);

        return redirect('admin/resources')->with('success',"resource updated Successfully");
     }
     
    public function deleteResource($id){
        $resource=Resource::where('id',$id)->first();
        if($resource->image !== 'noimage.jpg'){
          //Delete Image
          Storage::delete('image/resource/'.$resource->image);
        }
        $resource->delete();
        Post_tag::where('resource_id',$id)->delete();

        return back();
     }

     
     
}
