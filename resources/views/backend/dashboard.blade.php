@extends('backend.layout.app')
@section('dashboard-menu','mm-active')

@section('page-title')

<div class="page-title-wrapper">
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-graph1 icon-gradient bg-mean-fruit">
            </i>
        </div>
        <div>Overview Dashboard
            <div class="page-title-subheading">This is the page for overview all informations such as students ,courses
                ,lectures ,etc.
            </div>
        </div>
    </div>
</div>
@endsection

@section('main-content')

<div class="main-card mb-3 card">
    <div class="no-gutters row">
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-0 mr-3">
                        <div class="widget-numbers text-success">{{$users->count()}}</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Students</div>
                        <div class="widget-subheading">Includes old students</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-0 mr-3">
                        <div class="widget-numbers text-warning">{{$lectures->count()}}</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Lectures</div>
                        <div class="widget-subheading">All lectures from Y.E.C</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ml-0 mr-3">
                        <div class="widget-numbers text-danger">{{$courses->count()}}</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Courses</div>
                        <div class="widget-subheading">Include all courses that have done</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Event Notify</h5>
                <div class="divider mt-0" style="margin-bottom: 20px;"></div>

                <ul class="list-group list-group-flush">
                    @foreach($events->sortBy('start') as $event)
                    <li class="list-group-item">
                        <p class="list-group-item-heading font-weight-bold text-muted">{{$event->name}}</p>
                        <p class=" list-group-item-text">
                            <div class="mb-2 mr-2 badge badge-primary">Start Date : {{$event->start}}</div>
                            <div class="mb-2 mr-2 badge badge-secondary">End Date : {{$event->end}}</div>

                        </p>

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">
                    Birthday Notify
                </h5>
                <div class="divider mt-0" style="margin-bottom: 20px;"></div>


                <p class="list-group-item-text text-center">unavailable yet</p>

            </div>
        </div>

    </div>
</div>

@endsection