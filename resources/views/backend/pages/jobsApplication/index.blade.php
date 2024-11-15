@extends('backend.layouts.master')

@section('title')
Job Application Page - Admin Panel
@endsection

@section('styles')
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Job Application</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Job Application</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

@php
    $getParams = $_GET['location'] ?? '';
@endphp

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <form class="form-inline" action="{{ route ('admin.jobsapplication.index') }}" method="GET" id="job_applicant_filter">
                            <div class="form-group mb-2">
                                <label for="sel1">Select Location:</label>
                                <select class="form-control" id="sel1" name="location">
                                    <option value="">--Select location--</option>
                                    @foreach ($locations as $location)
                                    <option value="{{ $location->name }}" @if($getParams == $location->name) selected @endif>{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>
                    </div>
                    <p class="float-right mb-2">
                        <a herf="#" class="btn btn-primary pr-4 pl-4 exportJobApplicant">Download</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th>Applicant Name</th>
                                    <th>Applicant Email</th>
                                    <th>Applicant Phone</th>
                                    <th>Position</th>
                                    <th>Prefered Location</th>
                                    <th>Prefered Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $user->applicant_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->position }}</td>
                                    <td>{{ $user->prefered_location_1 }}</td>
                                    <td>{{ $user->prefered_location_2 }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->

    </div>
</div>
@endsection


@section('scripts')
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<script>
    /*================================
        datatable active
        ==================================*/
    if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: true
        });
    }

    $(document).ready(function(){
        $('.exportJobApplicant').click(function(event){
            event.preventDefault();
            const form = document.getElementById("job_applicant_filter");
            let formData = new FormData(form);
            formData.append("_token", "{{ csrf_token() }}");
            $.ajax({
                url : "{{ route('admin.jobsapplication.download') }}",
                method : 'POST',
                data : formData,
                processData: false,
                contentType: false,
                cache: false,
                xhrFields:{
                    responseType: 'blob'
                },
                success: function(data)
                {
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(data);
                    link.download = `applicant.xlsx`;
                    link.click();
                },
                // success :function(result, status, xhr){
                //     //console.log(result);
                //     var disposition = xhr.getResponseHeader('content-disposition');
                //     var matches = /"([^"]*)"/.exec(disposition);
                //     var filename = (matches != null && matches[1] ? matches[1] : 'applicant.xlsx');
                //     // The actual download
                //     var blob = new Blob([result], {
                //         type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                //     });
                //     var link = document.createElement('a');
                //     link.href = window.URL.createObjectURL(blob);
                //     link.download = filename;

                //     document.body.appendChild(link);

                //     link.click();
                //     document.body.removeChild(link);
                // },
                error : function(error){
                    console.log(error);
                }
            });
        });

    });


</script>
@endsection
