<?php

namespace App\Http\Controllers;

use App\Models\jobApplicants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Carbon\Carbon;
use File;

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
        $contents = File::get(base_path('jobs.json'));
        $jobs = json_decode($contents, true);
        return view('frontend.pages.jobs.career', compact('jobs'));
    }

    public function rules($jobName)
    {
        // Define the start and end dates
        $startDate = Carbon::create('2024-08-27');
        $endDate = Carbon::create('2024-09-10');

        $startDateTime = Carbon::create('2024-08-27 10:00:00');

        // Get the current date-time
        $current = Carbon::now();

        // Sanitize the job name for safe output
        $jobName = htmlentities($jobName);

        // Check if the current date is within the specified date range
        if ($current->between($startDate, $endDate)) {
            // Check if the current time is between 10:00 AM and 6:00 PM
            $startTime = Carbon::createFromTime(10, 0); // 10:00 AM
            $endTime = Carbon::createFromTime(18, 0);   // 6:00 PM

            $startDateTime = Carbon::now()->addDay()->setTime(10, 0, 0);
            if ($current->between($startTime, $endTime)) {
                // Current time is within 10:00 AM to 6:00 PM
                return view('frontend.pages.jobs.rules', compact('jobName', 'startDateTime'));
            }
        }
        // Default to showing the rules page if the time is outside the specified range

        return view('frontend.pages.jobs.maintenance', compact('jobName', 'startDateTime'));
    }

    public function applyNow($jobName)
    {
        $jobName = htmlentities($jobName);
        return view('frontend.pages.jobs.create', compact('jobName'));
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
        // $jobApplicants = new jobApplicants();
        // $jobApplicants->registration_number = $request->registration_number;
        // $jobApplicants->job_id = '0';
        // $jobApplicants->position = $request->position;
        // $jobApplicants->status = '1';
        // $jobApplicants->save();

        if ($request->file('Upload_photo')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path), 0777, true);
            }
            $file = $request->file('Upload_photo')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('Upload_photo')->getClientOriginalExtension();
            $request->file('Upload_photo')->storeAs($this_path, $fileName);
            $Upload_photo = $fileName;
        }

        if ($request->file('signature')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path), 0777, true);
            }
            $file = $request->file('signature')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('signature')->getClientOriginalExtension();
            $request->file('signature')->move($this_path, $fileName);
            $signature = $fileName;
        }

        if ($request->file('resume')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path), 0777, true);
            }
            $file = $request->file('resume')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('resume')->getClientOriginalExtension();
            $request->file('resume')->move($this_path, $fileName);
            $resume = $fileName;
        }

        if ($request->file('HighestQualificationMarksheet')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path), 0777, true);
            }
            $file = $request->file('HighestQualificationMarksheet')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('HighestQualificationMarksheet')->getClientOriginalExtension();
            $request->file('HighestQualificationMarksheet')->move($this_path, $fileName);
            $HighestQualificationMarksheet = $fileName;
        }

        if ($request->file('aadhar_card')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path), 0777, true);
            }
            $file = $request->file('aadhar_card')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('aadhar_card')->getClientOriginalExtension();
            $request->file('aadhar_card')->move($this_path, $fileName);
            $aadhar_card = $fileName;
        }

        if ($request->file('pan_card')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path));
            }
            $file = $request->file('pan_card')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('pan_card')->getClientOriginalExtension();
            $request->file('pan_card')->move($this_path, $fileName);
            $pan_card = $fileName;
        }

        if ($request->file('exp_latter')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path));
            }
            $file = $request->file('exp_latter')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('exp_latter')->getClientOriginalExtension();
            $request->file('exp_latter')->move($this_path, $fileName);
            $exp_latter = $fileName;
        }

        // if ($request->file('exp_latter')) {
        //     $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
        //     $position =  str_replace(" ", "_", $request->position);
        //     $phone = str_replace(" ", "_", $request->phone_number);
        //     $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
        //     if (!file_exists(storage_path($this_path))) {
        //         mkdir(storage_path($this_path));
        //     }
        //     $file = $request->file('exp_latter')->getClientOriginalName();
        //     $filename = pathinfo($file, PATHINFO_FILENAME);
        //     $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('exp_latter')->getClientOriginalExtension();
        //     $request->file('exp_latter')->move($this_path, $fileName);
        //     $exp_latter = $fileName;
        // }

        if ($request->file('registration_certificate')) {
            $prefered_location =  str_replace(" ", "_", $request->prefered_location_1);
            $position =  str_replace(" ", "_", $request->position);
            $phone = str_replace(" ", "_", $request->phone_number);
            $this_path = 'app/public/upload/' . $prefered_location . '/' . $position . '/' . $phone;
            if (!file_exists(storage_path($this_path))) {
                mkdir(storage_path($this_path));
            }
            $file = $request->file('registration_certificate')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $fileName  = str_replace(" ", "_", $filename) . '_' . time() . '.' . $request->file('registration_certificate')->getClientOriginalExtension();
            $request->file('registration_certificate')->move($this_path, $fileName);
            $registration_certificate = $fileName;
        }



        $jobApplicants = new jobApplicants();
        $jobApplicants->position  = $request->position ?? null;
        $jobApplicants->prefered_location_1  = $request->prefered_location_1 ?? null;
        $jobApplicants->prefered_location_2  = $request->prefered_location_2 ?? null;
        $jobApplicants->prefered_location_3  = $request->prefered_location_3 ?? null;
        $jobApplicants->applicant_name  = $request->applicant_name ?? null;
        $jobApplicants->aadhaar_card_no  = $request->aadhaar_card_no ?? null;
        $jobApplicants->pan_card_no  = $request->pan_card_no ?? null;
        $jobApplicants->dob  = $request->dob  ? date('Y-m-d', strtotime($request->dob)) :  null;
        $jobApplicants->birth_place  = $request->birth_place ?? null;
        $jobApplicants->birth_state  = $request->birth_state ?? null;
        $jobApplicants->physically_challenged  = $request->physically_challenged ?? null;
        $jobApplicants->physically_challenged_details  = $request->physically_challenged_details ?? null;
        $jobApplicants->religion  = $request->religion ?? null;
        $jobApplicants->religion_details  = $request->religion_details ?? null;
        $jobApplicants->caste_category  = $request->caste_category ?? null;
        $jobApplicants->caste_category_other  = $request->caste_category_other ?? null;
        $jobApplicants->nationality  = $request->nationality ?? null;
        $jobApplicants->address  = $request->address ?? null;
        $jobApplicants->city  = $request->city ?? null;
        $jobApplicants->state  = $request->state ?? null;
        $jobApplicants->marital_status  = $request->marital_status ?? null;
        $jobApplicants->father_name  = $request->father_name ?? null;
        $jobApplicants->husband_wife  = $request->husband_wife ?? null;
        $jobApplicants->phone_number  = $request->phone_number ?? null;
        $jobApplicants->contact_number1  = $request->contact_number1 ?? null;
        $jobApplicants->contact_number2  = $request->contact_number2 ?? null;
        $jobApplicants->email  = $request->email ?? null;
        $jobApplicants->uan_number  = $request->uan_number ?? null;
        $jobApplicants->registration_number = $request->registration_number ?? null;
        $jobApplicants->esi_number  = $request->esi_number ?? null;
        $jobApplicants->name_of_registered_faculty  = $request->name_of_registered_faculty ?? null;
        $jobApplicants->degree  = $request->degree ?? null;
        $jobApplicants->registration_certificate  = $registration_certificate ?? null;  //file
        $jobApplicants->main_qualification_year  = $request->main_qualification_year ?? null;
        $jobApplicants->main_qualification_branch  = $request->main_qualification_branch ?? null;
        $jobApplicants->main_qualification_percentage  = $request->main_qualification_percentage ?? null;
        $jobApplicants->main_qualification_date  = $request->main_qualification_date ?? null;
        $jobApplicants->main_qualification_college  = $request->main_qualification_college ?? null;
        $jobApplicants->main_qualification_univercity  = $request->main_qualification_univercity ?? null;
        $jobApplicants->additiional_qualification_year  = $request->additiional_qualification_year ?? null;
        $jobApplicants->additiional_qualification_branch  = $request->additiional_qualification_branch ?? null;
        $jobApplicants->additiional_qualification_percentage  = $request->additiional_qualification_percentage ?? null;
        $jobApplicants->additiional_qualification_date  = $request->additiional_qualification_date ?? null;
        $jobApplicants->additiional_qualification_college  = $request->additiional_qualification_college ?? null;
        $jobApplicants->additiional_qualification_univercity  = $request->additiional_qualification_univercity ?? null;
        $jobApplicants->additiional1_qualification_year  = $request->additiional1_qualification_year ?? null;
        $jobApplicants->additiional1_qualification_branch  = $request->additiional1_qualification_branch ?? null;
        $jobApplicants->additiional1_qualification_percentage  = $request->additiional1_qualification_percentage ?? null;
        $jobApplicants->additiional1_qualification_date  = $request->additiional1_qualification_date ?? null;
        $jobApplicants->additiional1_qualification_college  = $request->additiional1_qualification_college ?? null;
        $jobApplicants->additiional1_qualification_univercity  = $request->additiional1_qualification_univercity ?? null;
        $jobApplicants->exp1_start_date  = $request->exp1_start_date ?? null;
        $jobApplicants->exp1_end_date  = $request->exp1_end_date ?? null;
        $jobApplicants->exp1_company_name  = $request->exp1_company_name ?? null;
        $jobApplicants->exp1_location  = $request->exp1_location ?? null;
        $jobApplicants->exp1_post_hold  = $request->exp1_post_hold ?? null;
        $jobApplicants->exp1_job_discription  = $request->exp1_job_discription ?? null;
        $jobApplicants->exp1_relevant  = $request->exp1_relevant ?? null;
        $jobApplicants->exp2_start_date  = $request->exp2_start_date ?? null;
        $jobApplicants->exp2_end_date  = $request->exp2_end_date ?? null;
        $jobApplicants->exp2_company_name  = $request->exp2_company_name ?? null;
        $jobApplicants->exp2_location  = $request->exp2_location ?? null;
        $jobApplicants->exp2_post_hold  = $request->exp2_post_hold ?? null;
        $jobApplicants->exp2_job_discription  = $request->exp2_job_discription ?? null;
        $jobApplicants->exp2_relevant  = $request->exp2_relevant ?? null;
        $jobApplicants->upload_photo  = $Upload_photo ?? null; //file
        $jobApplicants->signature  = $signature ?? null; //file
        $jobApplicants->resume  = $resume ?? null;  //file
        $jobApplicants->HighestQualificationMarksheet  = $HighestQualificationMarksheet ?? null;  //file
        $jobApplicants->aadhar_card  = $aadhar_card ?? null;  //file
        $jobApplicants->pan_card  = $pan_card ?? null;  //file
        $jobApplicants->exp_latter  = $exp_latter ?? null;  //file
        $jobApplicants->applicent_remark  = $request->applicent_remark ?? null;  //file
        $jobApplicants->status = 1;
        $jobApplicants->job_id = 0;
        $jobApplicants->save();

        /**Sending Email  */
        $details = [
            'body' => $request->applicant_name . ' has applied for ' . $request->position . ' and application id is :' . 'JOB' . $jobApplicants->id ?? 0,
            'from' => 'jobs@vigilantindia.com',
            'subject' => 'New Application received for : ' . $request->position
        ];

        Mail::to('info@vigilantindia.com')->send(new SendEmail($details));
        session()->flash('success', 'Application has been saved successfully !!');

        return redirect()->route('jobs.thankYou');
    }
    public function thankYou()
    {
        $jobs = '';
        return view('frontend.pages.jobs.thankyou', compact('jobs'));
    }

    public function tempDown()
    {
        dd('sssssssssssssssssssssss');
        $jobs = '';
        return view('frontend.pages.jobs.maintenance', compact('jobs'));
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
