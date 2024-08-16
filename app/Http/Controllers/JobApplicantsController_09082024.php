<?php

namespace App\Http\Controllers;

use App\Models\jobApplicants;
use Illuminate\Http\Request;

class JobApplicantsController extends Controller
{
    public function intro()
    {
        $jobs = '';
        return view('frontend.pages.jobs.intro', compact('jobs'));
    }
    public function landing()
    {
        $jobs = '';
        return view('frontend.pages.jobs.landing', compact('jobs'));
    }
    public function career()
    {
        $jobs = '';
        return view('frontend.pages.jobs.career', compact('jobs'));
    }
    public function rules()
    {
        $jobs = '';
        return view('frontend.pages.jobs.rules', compact('jobs'));
    }
    public function applyNow()
    {
        $jobs = '';
        return view('frontend.pages.jobs.create', compact('jobs'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create New User
        $jobApplicants = new jobApplicants();
        $jobApplicants->registration_number = $request->registration_number;
        $jobApplicants->job_id = '0';
        $jobApplicants->position = $request->position;
        $jobApplicants->status = '1';
        $jobApplicants->save();


        // session()->flash('success', 'User has been created !!');
        return redirect()->route('jobs.thankYou');
    }
    public function thankYou()
    {
        $jobs = '';
        return view('frontend.pages.jobs.thankyou', compact('jobs'));
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = '';
        return view('frontend.pages.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = '';
        return view('frontend.pages.jobs.thankyou', compact('jobs'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\jobApplicants  $jobApplicants
     * @return \Illuminate\Http\Response
     */
    public function show(jobApplicants $jobApplicants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobApplicants  $jobApplicants
     * @return \Illuminate\Http\Response
     */
    public function edit(jobApplicants $jobApplicants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobApplicants  $jobApplicants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobApplicants $jobApplicants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobApplicants  $jobApplicants
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobApplicants $jobApplicants)
    {
        //
    }
}
