@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')
@php
$prefix = Request::segment(1); // Get the prefix dynamically
@endphp



<div class="slider">
    <div class="listing-banner">
        <div class="listing-overlay text-white">
            <div class="container mt-0 mt-md-7">
                <h2 class="main-heading text-white ">Current Openings</h2>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-weight-light">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  START  -->

<div class="mid-bg py-4 ">
    <div class="container">
        <div class="row">

            <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Uttarakhand Climate Responsive Rainfed Farming Project </div>
                        <h5 class="mt-3 mb-2">JOB LOCATION : -</h5>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Almora</td>
                                    <td>Dehradun</td>
                                    <td>Haldwani</td>
                                    <td>Haridwar</td>
                                </tr>
                                <tr>
                                    <td>Pauri</td>
                                    <td>Munkirehti</td>
                                    <td>Tilwada</td>
                                    <td>Uttarkashi</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-3">
                            <div class="form-row">
                                <div class=" col-md-12">
                                    <div class="table-responsive">
                                        <p class="h5"></p>
                                        <h5 class="mt-3 mb-2">Important Notes : -</h5>
                                        <ol type="1">
                                            <li>The Posting will be in Uttarakhand State at any district as per vacant posts (from time to time). </li>
                                            <li>The applicant may submit their online application as per their interest in the vacancy.
                                                After submission of the online application, the candidate cannot claim any
                                                employment.</li>

                                            <li>Online Applications received ONLY on
                                                <a href="https://vigilantindia.com/" target="_blank">https://vigilantindia.com/</a> will be considered.
                                            </li>
                                            <li>M.S. VIGILANT SECURITY, PLACEMENT & DETECTIVE SERVICES (PVT.) LTD. (VSPDS) reserves final rights of selection and rejection of any received applications.</li>
                                            <li>You are advised to fill the online application properly. Applying for a job is not a surety of the job. </li>
                                            <li>The qualification prescribed is the minimum requirement and possession of the same
                                                does not automatically make the candidates eligible to be called for the Selection
                                                Process/ Interview. </li>
                                            <li>Before submitting the application, the Candidate must ensure that he/she fulfills the
                                                eligibility conditions Qualification Criteria & Experience Criteria as mentioned on the
                                                website. M.S. VIGILANT SECURITY, PLACEMENT & DETECTIVE SERVICES
                                                (PVT.) LTD. (VSPDS) can change the above-mentioned qualification criteria as per
                                                requirement. The qualification prescribed is the eligibility criteria only.</li>
                                            <li>The submission of online application is not to be taken as guarantee for selection.

                                            </li>
                                            <li>M.S. VIGILANT SECURITY, PLACEMENT & DETECTIVE SERVICES (PVT.) LTD.
                                                (VSPDS). Services Consulting Pvt. Ltd is not charging any amount from the
                                                candidates for recruitment/selection.
                                            </li>
                                            <li>All posts are purely Temporary outsourced and non-transferable. These posts can be
                                                cancelled/ increased/ decreased anytime as per requirement.
                                            </li>
                                            <li>One salary will be deposited as per security deposit in against of any theft or damage. If The contract gets over or any candidate resigns from the company he will get the refund within 72 hrs after depositing the noc from his deployed district.And it will clearly mentioned in offer letter as well.</li>
                                            @php
                                            $date = env('START_DATE');
                                            $dateTime = new DateTime($date);
                                            $day = $dateTime->format('jS'); // Adds 'st', 'nd', 'rd', or 'th' to the day
                                            $startDate = $day . ' ' . $dateTime->format('M Y');


                                            $end_date = env('END_DATE');
                                            $dateTime = new DateTime($end_date);
                                            $day = $dateTime->format('jS'); // Adds 'st', 'nd', 'rd', or 'th' to the day
                                            $endDate = $day . ' ' . $dateTime->format('M Y');


                                            @endphp
                                            <li>Candidate can apply for the post as per their requirement in between 10 am to 6pm from {{ $startDate }} till {{ $endDate }} after the closing date no further application will be taken and no hard copy will be accepted .
                                            </li>
                                            <li>Kindly apply based on the availability of seats in the district.</li>
                                        </ol>
                                    </div>
                                    <p class="mt-3 mb-0">
                                        For any query mail on <a href="mailto:info@vigilantindia.com">info@vigilantindia.com</a>
                                    <div class="text-info">(10:00 AM to 6:00 PM on working days.)</div>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">Sr.No</th>
                                                    <th style="width: 18%;">Position Name</th>
                                                    <th style="width: 32%;">Qualifications</th>
                                                    <th style="width: 5%;">Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($jobs as $key => $job)
                                                <?php
                                                $job_id = $job['Sno'];
                                                // Sanitize position name or set default
                                                $PositionName = !empty($job['name_of_the_post'])  ? $job['name_of_the_post'] : 'N/A';
                                                ?>
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $PositionName }}</td>
                                                    <td>{{ $job['Qualifications'] }}</td>
                                                    <td>{{ $job['Salary'] ?? 'Not Specified' }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <p>
                                            <a href="{{ route($prefix . '.career') }}" class="btn btn-primary">Continue To Apply</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Intro  section end-->
        </div>
    </div>
</div>
<!-- End   -->
@endsection

@section('scripts')

@endsection