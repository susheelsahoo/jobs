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
                        <img src="https://yellowtail.tech/wp-content/uploads/2022/11/job-searching-for-Non-tech-Companies-1024x576.png"
                            alt="Non-Tech Job Icon">
                        <h3>JalaGum Job Applications</h3>
                        <p>Apply here for positions in JalaGum roles.</p>
                        <a href="{{ route('jalagum.intro') }}" class="btn btn-primary mt-2">Apply for JalaGum Jobs</a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="job-block">
                    <div>
                        <img src="https://images.business.com/app/uploads/2019/05/05125608/20-best-careers-for-technology-geeks.png"
                            alt="Tech Job Icon">
                        <h3>NHM Job Applications</h3>
                        <p>Apply here for positions in National Health Mission roles.</p>
                        <a href="{{ route('nhm.intro') }}" class="btn btn-primary mt-2 disabled" tabindex="-1" aria-disabled="true">Apply for NHM Jobs</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection