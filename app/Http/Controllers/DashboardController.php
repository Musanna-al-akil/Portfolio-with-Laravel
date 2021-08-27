<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\support\Facades\Hash;
use App\Contact;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

   public function dashboard(){
      return view('dashboard.home');
   }
   
   public function mystoryDashboard(){
      return view('dashboard.mystoryDash.home');
   }
   
   public function massage(){
      $contacts=Contact::all();

      return view('dashboard.massage',compact('contacts')); 
   }

   public function massageDelete($id){
      $massage=Contact::where('id',$id)->first();
      $massage->delete();
   
      return back();
   }

   public function setting(){
      return view('dashboard.profile'); 
   }

   public function settingPost(Request $request){
      $user=Auth::user();
      $user->name=$request['name'];
      $user->save();

      if($request['password'] != ""){
         if(!(Hash::check($request['password'],Auth::user()->password))){
           return redirect()->back()->with('error',"Your Current password does not match with the password provide");
         }
         if(strcmp($request['password'],$request['new_password']) == 0){
           return redirect()->back()->with('error',"New password can not be same as your current password");
         }

         $validation=$request->validate([
           'password'=>'required',
           'new_password'=>'required|string|min:8|confirmed',
         ]);

        $user->password=bcrypt($request['new_password']);
        $user->save();
        return redirect()->back()->with('success',"Password Changed Successfully");
      }
      return back();
   }
}