<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Auth;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function feedbacks(){
        $feedbacks = Feedback::all();

        return view('dashboard.feedback.feedbacks', compact('feedbacks'));
    }

    public function createFeedback(){
        return view('dashboard.feedback.createFeedback');
    }

    public function createFeedbackSubmit(Request $request){
        $this->validate($request, array(
            'name' => 'required|max:60',
            'title' => 'required',
            'discription' => 'required',
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
            $fileNameToStore = $id . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image/feedback', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $feedback = new Feedback();
        $feedback->title = $request['title'];
        $feedback->discription = $request['discription'];
        $feedback->name = $request['name'];
        $feedback->image = $fileNameToStore;
        $feedback->save();

        return redirect()->route('createFeedbackSubmit')->with('success', "Form Updated Successfully");
    }

    public function editFeedbacks($id){
        $feedback = feedback::where('id', $id)->first();

        return view('dashboard.feedback.editFeedback', compact('feedback'));
    }

    public function FeedbackEditPosts(Request $request, $id){
        $this->validate($request, array());

        if ($request->hasFile('image')) {
            $ids = Auth::id();
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //GET just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $ids . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/image/feedback', $fileNameToStore);
        }
   
        $feedback = Feedback::where('id', $id)->first();
        $feedback->name = $request['name'];
        $feedback->title = $request['title'];
        $feedback->discription = $request['discription'];
        if ($request->hasFile('image')) {
            Storage::delete('image/feedback/' . $feedback->image);
            $feedback->image = $fileNameToStore;
        }
        $feedback->save();

        return redirect('admin/feedbacks')->with('success', "Feedback edited Successfully");
    }
    
    public function feedbackDelete($id){
        $feedback = Feedback::where('id', $id)->first();
        Storage::delete('image/feedback' . $feedback->image);
        $feedback->delete();

        return back();
    }
}