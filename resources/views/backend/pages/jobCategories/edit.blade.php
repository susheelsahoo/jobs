@extends('backend.layouts.master')

@section('title')
Edit Job Category - Admin Panel
@endsection

@section('styles')
<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection

@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Edit Job Category - {{ $jobCategory->name }}</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.jobCategories.index') }}">All Job Categories</a></li>
                    <li><span>Edit Job Category</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Job Category</h4>
                    @include('backend.layouts.partials.messages')

                    <form action="{{ route('admin.jobCategories.update', $jobCategory->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Job Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $jobCategory->name }}" placeholder="Enter Job Category Name" required>
                        </div>

                        <div class="form-group">
                            <label for="dis">Description</label>
                            <textarea class="form-control" id="dis" name="dis" placeholder="Enter Job Category Description" required>{{ $jobCategory->dis }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $jobCategory->start_date }}" required>
                        </div>

                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $jobCategory->end_date }}" required>
                        </div>

                        <div class="form-group">
                            <label for="active_date">Active Date</label>
                            <input type="date" class="form-control" id="active_date" name="active_date" value="{{ $jobCategory->active_date }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="active" {{ $jobCategory->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $jobCategory->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Job Category</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')
     @include('backend.pages.roles.partials.scripts')
@endsection
