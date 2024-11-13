@extends('frontend.layouts.master')
@section('title')
    Job Application
@endsection

@section('styles')
    <style>

        .job-block {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 300px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            padding: 20px;
        }

        .job-block:hover {
            transform: scale(1.05);
        }

        .job-block img {
            width: 120px;
            height: 80px;
            margin-bottom: 15px;
        }

        .job-block h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }

        .job-block a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
@endsection

@section('admin-content')
    <div class="mid-bg py-4 main-margin">
        <div class="container">
            <div class="row mb-4">

                <div class="col-md-6 mb-3">
                    <div class="job-block">
                        <div>
                            <img src="https://images.business.com/app/uploads/2019/05/05125608/20-best-careers-for-technology-geeks.png"
                                alt="Tech Job Icon">
                            <h3>Tech Job Applications</h3>
                            <p>Apply here for positions in technology and development roles.</p>
                            <a href="#" class="btn btn-primary mt-2">Apply for Tech Jobs</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="job-block">
                        <div>
                            <img src="https://yellowtail.tech/wp-content/uploads/2022/11/job-searching-for-Non-tech-Companies-1024x576.png"
                                alt="Non-Tech Job Icon">
                            <h3>Non-Tech Job Applications</h3>
                            <p>Apply here for positions in management, HR, and other non-technical roles.</p>
                            <a href="#" class="btn btn-primary mt-2">Apply for Non-Tech Jobs</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body">
                            <h3 class="heading2 pb-2 border-bottom mb-4">General Conditions:</h3>

                            <div class="mt-3">
                                <ul>
                                    <li>M/s M. S. Vigilant Security, Placement and Detective Services Pvt. Ltd is under a
                                        contract to recruit and manage HR for National Health Mission, Uttarakhand.</li>
                                    <li>The posts are temporary and outsourced in nature under National Health Mission –
                                        Uttarakhand.</li>
                                    <li>The number of posts indicated is provisional and can be
                                        increased/decreased/cancelled
                                        at any point of time.</li>
                                    <li>Only Indian Nationals can apply.</li>
                                    <li>No interim correspondence will be entertained.</li>
                                    <li>The qualifications and experience prescribed is the minimum requirement and
                                        possession of the same does not automatically make the candidates eligible to be
                                        called for the selection process/ interview.</li>
                                    <li>CANVASSING IN ANY FORM WILL RESULT IN DISQUALIFICATION OF APPLICATION.</li>
                                    <li>Kindly apply based on the availability of seats in the district.</li>
                                </ul>
                                <p class="mt-3">
                                    It is for the candidate to ensure that he/she fulfills the eligibility criteria and
                                    complies with the requirements and adheres to the instructions contained herein as well
                                    as
                                    in the application form. Candidates are, therefore, urged to carefully read the
                                    information in advertisement/portal/website and complete the application form and submit
                                    the same as per instructions given in this regard.
                                </p>
                                <p class="mt-3 mb-0">
                                    For any query, email at <a
                                        href="mailto:info@vigilantindia.com">info@vigilantindia.com</a>
                                <div class="text-info">(10:00 AM to 6:00 PM on working days.)</div>
                                </p>
                                <p><a href="{{ route('jobs.landing') }}" class="btn btn-primary">Continue</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
@endsection

@section('scripts')
@endsection
