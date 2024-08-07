@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')


<div class="slider">

</div>

<!--  START  -->



<!--  START  -->

<div class="mid-bg py-4  main-margin">
    <div class="container">
        <div class="row">

            <!--	Intro section start-->
            <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">


                        <div class="py-4 d-flex justify-content-center align-items-center">
                            <div>
                                <div class="mb-4 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </div>
                                <div class="text-center">
                                    <h1>Thank You !</h1>
                                    <p>Lorem ipsum dolor sitx. Lorem ipsum dolor sit, </p>
                                    <a href="{{ route('jobs.landing') }}" class="btn btn-primary">Back Home</a>
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
    <!-- End   -->
    @endsection

    @section('scripts')

    @endsection