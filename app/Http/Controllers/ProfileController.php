<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use \Auth;

class ProfileController extends Controller
{
    //to show the profile view
    public function create(){
        $show=Profile::where('user_id',Auth::user()->id)->get();
        return view('freelancer.profile')->with('show',$show);
    }
//to save the profile
    public function overview(Request $req){
       
        $User = Auth::user();
        if($User->profile){
            abort(500);
        }
        $profile=new Profile;
        $profile->overview=$req->overview;
        $profile->english_proficiency=$req->english_proficiency;
        $profile->experience_level=$req->experience_level;
        $profile->professional_title=$req->professional_title;
        $profile->education=$req->education;
        $profile->hourly_rate=$req->hourly_rate;
        $profile->skills=$req->skills;
        
        $User->profile()->save($profile);
        $req->session()->flash('status','Profile has been saved');

        return redirect('/profile');
    }
//to show profile on the profile page
public function show(){
   // $show=Profile::where('user_id',Auth::user()->id)->get();
   // return $show;
}
}
