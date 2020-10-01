<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Job;
use \Auth;
use Session;

class JobController extends Controller
{
    //view create job
    public function create(){
        $categories=Category::all();

        return view('jobs.create')->with('categories',$categories);
    }
//add job 
    public function store(Request $req){
        $job=new Job;
        $job->title=$req->title;
        $job->description=$req->description;
        $job->budget=$req->budget;
        $job->experience_level=$req->experience_level;
        $job->delivery_date=$req->delivery_date;
        $job->category_id=$req->category;
        $path=$req->file('doc')->store('files');
        $User = Auth::user();
        $User->jobs()->save($job);
        $req->session()->flash('status','The Job has been created successfully');
        return redirect('home');
     }
     //list jobs
     public function list(){
        $User=Auth::user();
        $Jobs=$User->jobs->all();
        
        return view('jobs.list')->with('Jobs',$Jobs);
     }
}
