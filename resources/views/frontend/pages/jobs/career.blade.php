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
                        <li><b>Note:</b>Kindly apply based on the availability of seats in the district.</li>
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Select Post </div>
                        <div class="mt-3">
                            <div class="form-row">
                                <div class=" col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="max-width: 70px;">Sr.No</th>
                                                    <th scope="col">Position Name</th>
                                                    <th scope="col">Qualifications</th>
                                                    <th scope="col"> Remuneration</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jobs as $key as $job)

                                                @if (!empty($job['PositionName'])) {
                                                $PositionName = preg_replace('/[^A-Za-z0-9-]+/', '-', $job['PositionName']);
                                                } else {
                                                $PositionName = 'N/A'; // Default value if positionName is empty
                                                }
                                                @endif
                                                <tr>
                                                    <td>{{ $key+1 }}</td>

                                                    <td>{{ $PositionName }}</td>
                                                    <td>{{ $job['Qualifications'] }}</td>
                                                    <td>{{ $job['Remuneration'] }}</td>
                                                    <td>
                                                        @if (!empty($job['PositionName']))
                                                        <!-- Ensure the link is only shown if positionName is not empty -->
                                                        <a href="{{ route($prefix . '.rules', ['job_id' => $PositionName]) }}" class="btn btn-primary">Apply</a>

                                                        @else
                                                        <span class="text-muted">Not Available</span> <!-- Placeholder if no positionName -->
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach




                                            </tbody>
                                        </table>
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