@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')
@php
$prefix = Request::segment(1);
@endphp


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
                                            Vigilant for the various posts across different Districts in Uttarakhand Climate Responsive Rainfed Farming Project (UCRRFP).
                                        </p>
                                        <h3 class="mb-4">District wise details of requirements: -</h3>

                                        <p>
                                            <strong>Requirement in District Almora,Dehradun,Halwani,Munkirehti,Pauri,Uttarkashi,Tilwada </strong>
                                        </p>
                                        <table class="table table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>S.N.</th>
                                                    <th>Name of the post</th>
                                                    <th>Vacant</th>
                                                    <th>Salary</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0;
                                                $total = 0;
                                                ?>
                                                @foreach ($contents as $key => $content)
                                                @if($content['status'] ==1)
                                                <?php
                                                // Check if positionName is not empty and sanitize it
                                                $PositionName = $content['name_of_the_post'];
                                                if (!empty($PositionName)) {
                                                    $PositionName = preg_replace('/[^A-Za-z0-9-]+/', '-', $PositionName);
                                                } else {
                                                    $PositionName = 'N/A'; // Default value if positionName is empty
                                                }
                                                ?>

                                                <?php

                                                $vacant = $content['vacant'];
                                                $total = $total + $vacant;
                                                $i++; ?>
                                                <tr>
                                                    <td>{{ $i}}</td>
                                                    <td>{{$PositionName}}</td>
                                                    <td>{{$vacant}}</td>
                                                    <td>{{$content['Salary']}}</td>
                                                    <td>
                                                        @if (!empty($PositionName))
                                                        <!-- Ensure the link is only shown if positionName is not empty -->
                                                        <a href="{{ route($prefix . '.rules', ['job_id' => $PositionName]) }}" class="btn btn-primary">Apply</a>

                                                        @else
                                                        <span class="text-muted">Not Available</span> <!-- Placeholder if no positionName -->
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach

                                                <tr>
                                                    <td colspan="2">Total</td>
                                                    <td colspan="3"> {{$total}}</td>
                                                </tr>

                                            </tbody>
                                        </table>




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