<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class job_post_controller extends Controller
{
    //TO BE EDITED, REMOVE $JOB_FIELDS AND USE MODEL TO FETCH DATA FROM JOB_FIELD TABLE
    public function add_post(){
        $job_fields = [
            'Computer Science' => 'computer_science',
            'Engineering' => 'Engineering',
            'Health' => 'Health',
            'Architecture' => 'Architecture',
            'Business' => 'Business',
            'Education' => 'Education',
            'Art' => 'Art',
            'Law' => 'Law',
            'Science' => 'Science',
            'Finance' => 'Finance',
        ];
        return view('job_posts.add_job_posts', compact('job_fields'));
    }

    public function verify_post(Request $request){
        $this.validate($request,[
        'job_name'=>'required',

        ]);
    }
}
