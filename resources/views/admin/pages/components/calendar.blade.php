@extends('admin.layouts.layout-basic')

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
                    <div class="card-header">
                        <h3>Events</h3>
                    </div>
                    <div class="card-block">
                        <ol class="fc-event-list">
                            <li><span class="fc-event-dot"></span> Default</li>
                            <li><span class="fc-event-dot" style="background-color:#007dcc"></span> Primary</li>
                            <li><span class="fc-event-dot" style="background-color:#4fc47f"></span> Success</li>
                            <li><span class="fc-event-dot" style="background-color:#f35a3d"></span> Danger</li>
                            <li><span class="fc-event-dot" style="background-color:#ffde00"></span> Warning</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop