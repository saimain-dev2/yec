@extends('backend.layout.app')
@section('lecture-menu','mm-active')

@section('css')
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
<link type="text/css" rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

@endsection
@section('page-title')

<div class="page-title-wrapper">
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-study icon-gradient bg-mean-fruit">
            </i>
        </div>
        <div>Lectures Managment
            <div class="page-title-subheading">This is the page for overview of lectures.
            </div>
        </div>
    </div>
</div>
@endsection

@section('main-content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Lectures Table</h5>
        <div class="divider mt-0" style="margin-bottom: 20px;"></div>

        <div class="">
            <table class="mb-0 table table-bordered table-hover table-responsive" id="lecture-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th style="min-width: 100px !important;">Date of Birth</th>
                        <th>Address</th>
                        <th>Bio</th>
                        <th>Qualification</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Bio</th>
                        <th>Qualification</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($lectures as $lecture)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$lecture->name}}</td>
                        <td>
                            {{$lecture->email}}
                        </td>
                        <td>{{$lecture->phone}}</td>
                        <td>
                            {{$lecture->dob}}
                        </td>
                        <td>
                            {{$lecture->address}}
                        </td>
                        <td>
                            {{ substr($lecture->bio, 0, 20) }}
                        </td>
                        <td>{{$lecture->qualification->name}}</td>
                        <td>

                            <a href="/lecture/detail/{{$lecture->id}}" class="mb-2 mr-2 btn btn-sm btn-info text-white"
                                data-id="{{$lecture->id}}">
                                Check
                            </a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#lecture-table').DataTable();




    });
</script>
@endsection