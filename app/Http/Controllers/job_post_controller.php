<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job_field;
use App\Models\job_type;
use App\Models\job;

class job_post_controller extends Controller
{
    //TO BE EDITED, REMOVE $JOB_FIELDS AND USE MODEL TO FETCH DATA FROM JOB_FIELD TABLE
    public function add_post(){
        $job_fields = job_field::all();
        $job_types = job_type::all();
        return view('job_posts.add_job_posts', compact('job_fields'), compact('job_types'));
    }

    public function verify_post(Request $request){
        $this.validate($request,[
        'job_name'=>'required',
        'job_company'=>'required',
        'job_adress'=>'required',
        'job_salary'=>'required',
        'job_deadline'=>'required',
        'job_required_qualification'=>'required',

        ]);
    }
    public function store_post(Request $request){
        $job = new job();
        $job->job_name = $request->job_name;
        $job->job_company = $request->job_company;
        $job->job_adress = $request->job_adress;
        $job->job_salary = $request->job_salary;
        $job->job_deadline = $request->job_deadline;
        $job->job_required_qualification = $request->job_required_qualification;
        $job->save();
        return redirect()->route('dashboard');
    }

    public function show_post(){
        return view('job_posts.dashboard');
    }
}
