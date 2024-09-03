@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')


<div class="mid-bg py-4 main-margin">
    <div class="container">
        <div class="row">
            <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Notifications </div>
                        <div class="mt-3">
                            <div class="form-row">
                                <div class=" col-md-12">

                                    <div class="table-responsive">
                                        <p>The M.S.Vigilant requires talented candidates to work on CONTRACT BASIS with M.S.
                                            Vigilant for the various posts across different Districts in UTTARAKHAND STATE for
                                            National Health Mission - Uttarakhand.
                                        </p>
                                        <h3 class="mb-4">District wise details of requirements: -</h3>

                                        <p>
                                            <strong>Requirement in District UTTARKASHI/NAINITAL/UDHAM SINGH NAGAR/BAGESHWAR/DEHRADUN/ALMORA/CHAMOLI/Champawat </strong>
                                        </p>
                                        <table class="table table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>S.N.</th>
                                                    <th>Program</th>
                                                    <th>Name of the post</th>
                                                    <th>Vacant</th>
                                                    <th>Location</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0;
                                                $total = 0; ?>
                                                @foreach ($contents as $key => $content)
                                                @if($content['status'] ==1)
                                                <?php
                                                $vacant = $content['vacant'];
                                                $total = $total + $vacant;
                                                $i++; ?>
                                                <tr>
                                                    <td>{{ $i}}</td>
                                                    <td>{{$content['program']}}</td>
                                                    <td>{{$content['name_of_the_post']}}</td>
                                                    <td>{{$vacant}}</td>
                                                    <td>{{$content['location']}}</td>

                                                </tr>
                                                @endif
                                                @endforeach

                                                <tr>
                                                    <td colspan="3">Total</td>
                                                    <td colspan="2"> {{$total}}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="table-responsive">
                                            <p class="h5">JOB LOCATION :- Different Districts of UTTARAKHAND State</p>
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
                                                <li>Candidate can apply for the post as per their requirement in between 10 am to 6pm from 27 th of August 2024 till 23rd sept 2024 after the closing date no further application will be taken and no hard copy will be accepted .
                                                </li>
                                                <li>Kindly apply based on the availability of seats in the district.</li>
                                            </ol>
                                        </div>

                                        <p class="mt-3 mb-0">
                                            For any query mail on <a href="mailto:info@vigilantindia.com">info@vigilantindia.com</a>
                                        <div class="text-info">(10:00 AM to 6:00 PM on working days.)</div>
                                        </p>
                                        <p>
                                            <a href="{{ route('jobs.career') }}" class="btn btn-primary">View Vacancies & Apply</a>
                                        </p>



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
</div>
@endsection

@section('scripts')

@endsection