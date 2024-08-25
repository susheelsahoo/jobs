@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')


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

            <!--	Intro section start-->
            <!-- <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Filters </div>
                        <div class="mt-3">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">State <span class="text-danger">*</span> :</label>
                                    <select id="inputState" class="form-control">
                                        <option>All State</option>

                                        <option>Delhi</option>
                                    </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Select Post</label>
                                    <select id="inputState" class="form-control">
                                        <option>All Post </option>
                                        <option>Post 1</option>
                                    </select>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
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
                                                    <th scope="col"> Old Qualifications</th>
                                                    <th scope="col"> Remuneration</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jobs as $jobs)
                                                <?php
                                                $positionName = preg_replace('/[^A-Za-z0-9-]+/', '-', $jobs['positionName'])
                                                ?>
                                                <tr>
                                                    <td>{{$jobs['SNo']}}</td>
                                                    <td>{{$positionName}}</td>
                                                    <td>{{$jobs['qualifications']}}</td>
                                                    <td>{{$jobs['remuneration']}}</td>
                                                    <td>
                                                        <a href="{{ route('jobs.rules', ['job_id' => $positionName]) }}" class="btn btn-primary">Apply</a>

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