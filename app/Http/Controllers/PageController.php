<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Homepost;
use App\Feedback;
use App\Contact;
use App\Education;
use App\DesignTalk;
use App\Distinction;
use App\According;
use App\Resource;
use App\Download;
use Illuminate\Support\Facades\Session;
use Response;


class PageController extends Controller
{
    public function index(){
        $posts=Homepost::all();
        $feedbacks=Feedback::all();

        return view('pages.home',compact('posts','feedbacks'));
    }

    public function projects(){
        return view('pages.projects');
    }

    public function story(){
        $feedbacks=Feedback::all();
        $educations=Education::all();
        $designtalks=DesignTalk::all();
        $distinctions=Distinction::all();
        $accordings=According::all();

        return view('pages.mystory',compact('feedbacks','educations','distinctions','designtalks','accordings'));
    }
    
    public function contact(){
        return view('pages/contact');
    }

    public function contactSubmit(Request $request){
        $this->validate($request,array(
            'name'=>'required|max:60',
            'email'=>'required|email',
            'massage'=>'required',
        ));
        
        $contact=new Contact;
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->massage=$request['massage'];
        $contact->save();

        return redirect()->route('contact')->with('success',"Mail Sent Successfully");
    }

    public function resource(){
        $feedbacks=Feedback::all();   
        $resources=Resource::all();

        return view('pages.resource',compact('feedbacks','resources'));
    }



    public function resourceShow($slug){
        $resource=Resource::whereSlug($slug)->first();
        if($resource !== null){
            $blogKey='blog_' .$resource->id;
            if(!Session::has($blogKey)){
                $resource->increment('visitor_count');
                Session::put($blogKey,1);
            }
        
            return view('pages.resourceShow',compact('resource'));
        }
        else{ 
            return abort(404);
        }
    }
    public function resourceDownload(Request $request){
        $this->validate($request,array(
            'email'=>'required',
        ));
       
       
        $download=new download;
        $download->email=$request['email'];
        $download->resource_id=$request['resource_id'];
        $download->save();
        $resource=Resource::where('id', $request['resource_id'])->first();
        $pathToFile = storage_path('app/public/image/resource/' . $resource->image);

        return Response::download($pathToFile,'nnn.jpg',['location' => '/']);
     }
}