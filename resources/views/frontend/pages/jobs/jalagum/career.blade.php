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
                                                    <th>Name of the post</th>
                                                    <th>Vacant</th>
                                                    <th>Location</th>
                                                    <th>Status</th>

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
                                                    <td>{{$content['name_of_the_post']}}</td>
                                                    <td>{{$vacant}}</td>
                                                    <td>{{$content['location']}}</td>
                                                    <td>{{$content['current_status']}}</td>

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