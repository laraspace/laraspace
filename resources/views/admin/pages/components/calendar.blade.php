@extends('admin.layouts.layout-basic')
@section('styles')
    <style>

    </style>
    @stop
@section('scripts')
    <script src="{{asset('assets/admin/js/pages/calendar.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Calendar</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active">Calendar</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-block">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-block">
                        <h5>Events</h5>
                        <ol class="breadcrumb">
                            <li><span class="fc-event-dot"></span> &nbsp; Default</li>
                            <li><span class="fc-event-dot" style="background-color:#007dcc"></span> &nbsp; Primary</li>
                            <li><span class="fc-event-dot" style="background-color:#4fc47f"></span> &nbsp; Success</li>
                            <li><span class="fc-event-dot" style="background-color:#007dcc"></span> &nbsp; Danger</li>
                            <li><span class="fc-event-dot" style="background-color:#ffde00"></span> &nbsp; Warning</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop