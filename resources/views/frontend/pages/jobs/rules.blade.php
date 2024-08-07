@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')



<!--  START  -->

<div class="mid-bg py-4  main-margin">
    <div class="container">
        <div class="row">

            <!--	Intro section start-->
            <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Terms and Conditions
                        </div>
                        <div class="mt-3">
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <ul>
                                        <li>Interested candidates fulfilling the requirements may submit the Application online by clicking Apply button in front of each post.</li>
                                        <li><span>ONLY </span>Online Applications received will be considered.</li>
                                        <li>The qualification prescribed only selection criteria & it will not be interpreted automatically selection.</li>
                                        <li>The qualification prescribed may change as per requirement.</li>
                                        <li>Incomplete application or application received without proper information will not be considered.</li>
                                        <li>Before submitting application please study and be ready with below mentioned documents as you have to fill the form at one go.
                                            <ul class="mt-2">
                                                <li>Soft copy of Passport Size Photograph <span class="text-primary">( Max Size : 300KB ) - Image File Format(.png, .jpg, .jpeg, .bmp, .gif)</span></li>
                                                <li>Signature. <span class="text-primary">( Max Size : 300KB ) - Image File Format(.png, .jpg, .jpeg, .bmp, .gif)</span></li>
                                                <li>Latest Updated Resume in PDF or Word format <span class="text-primary"> ( Max Size : 2048KB ) to upload.</span></li>
                                                <li>Aadhar card Number <span class="text-primary">( Max Size : 2048KB )</span> to upload.</li>
                                                <li>Highest Qualification Marksheet. <span class="text-primary">( Max Size : 2048KB )</span> to upload.</li>
                                                <li>Experience Letter. <span class="text-primary">( Max Size : 2048KB )</span> to upload.</li>

                                            </ul>
                                        </li>
                                        <li>On shortlisting of your application, following originals documents along with one photocopy to be submitted during interview:-
                                            <ol class="mt-2 text-primary">
                                                <li>Photo</li>
                                                <li> 2. Signature.</li>
                                                <li> Updated Resume.</li>
                                                <li> Highest Qualification Marksheet.</li>
                                                <li>Aadhar Card.</li>
                                                <li> Employer salary certificate / Document confirming the current CTC.</li>
                                                <li> Experience Letter.</li>
                                            </ol>
                                        </li>
                                        <li>On the successful submission of application
                                            <ul>
                                                <li>Auto generated SMS will be sent to the applicant on the registered Mobile Number which contains Job Reference Number.</li>
                                                <li><a href="#"> to Download the filled application details that you can download and keep it for your reference.</a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                    <p class="mt-3 mb-0">
                                        For any query mail on <a href="mailto:someone@example.com">google.com</a>
                                    <div class="text-info">(10:00 AM to 6:00 PM on working days.)</div>
                                    </p>
                                    <p>

                                        <button type="button" class="btn btn-secondary">Back</button>
                                        <a href="{{ route('jobs.applyNow') }}" class="btn btn-primary">Continue</a>
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

@endsection

@section('scripts')

@endsection