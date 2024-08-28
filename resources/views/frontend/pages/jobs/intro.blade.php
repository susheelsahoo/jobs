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
            <!--	Intro section start-->

            <div class=" col-md-12 right-section   mb-4 ">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Note:</strong> We are live from <strong>27th Aug 2024</strong> to <strong>11 Sep 2024 </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">General Conditions: </div>
                        <div class="mt-3">
                            <div class="form-row">
                                <div class=" col-md-12">
                                    <ul class="">

                                        <li>M/s M. S. Vigilant Security, Placement and Detective Services Pvt. Ltd is under a
                                            contract to recruit and manage HR for National Health Mission, Uttarakhand.</li>
                                        <li>The posts are temporary and outsourced in nature under National Health Mission
                                            – Uttarakhand.
                                        </li>
                                        <li>The number of posts indicated is provisional and can be
                                            increased/decreased/cancelled at any point of time.
                                        </li>
                                        <li>Only Indian Nationals can apply.
                                        </li>
                                        <li>No interim correspondence will be entertained.</li>
                                        <li>The qualifications and experience prescribed is the minimum requirement and
                                            possession of the same does not automatically make the candidates eligible to be
                                            called for the selection process/ interview. </li>
                                        <li>CANVASSING IN ANY FORM WILL RESULT IN DISQUALIFICATION OF APPLICATION. </li>
                                        <li>Kindly apply based on the availability of seats in the district.</li>
                                    </ul>
                                    <p class="mt-3">
                                        It is for the candidate to ensure that he/ she fulfills the eligibility criteria and comply with
                                        the requirements and adheres to the instructions contained herein as well as in the
                                        application form. Candidates are, therefore, urged to carefully read the information in
                                        advertisement/ portal/ website and complete the application form and submit the same as
                                        per instructions given in this regard.

                                    </p>
                                    <p class="mt-3 mb-0">
                                        For any query mail on <a href="mailto:info@vigilantindia.com">info@vigilantindia.com</a>
                                    <div class="text-info">(10:00 AM to 6:00 PM on working days.)</div>
                                    </p>
                                    <p><a href="{{ route('jobs.landing') }}" class="btn btn-primary">Continue</a></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--	Intro  section end-->
        </div>
    </div>

    <!-- End   -->

    @section('scripts')

    @endsection