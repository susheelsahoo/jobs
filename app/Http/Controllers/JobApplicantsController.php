<?php

namespace App\Http\Controllers;

use App\jobApplicants;
use Illuminate\Http\Request;

class JobApplicantsController extends Controller
{
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
        return view('frontend.pages.jobs.index', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->name);
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
