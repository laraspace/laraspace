@extends('admin.layouts.layout-basic')
@section('styles')
    <style>
        .calendar-event ol{

        }
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
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.components.calendar')}}">Components</a></li>
                <li class="breadcrumb-item active">Calendar</li>
            </ol>
        </div>
        <div class="calendar">
            <div class="row">
                <div class="col-xl-2 calendar-event">
                    <div class="card">
                        <div class="card-header">
                            <h5>Events</h5>
                        </div>
                        <div class="card-body">
                            <ol class="fc-event-list">
                                <li><span class="fc-event-dot"></span> Default</li>
                                <li><span class="fc-event-dot fc-event-primary-dot"></span> Primary</li>
                                <li><span class="fc-event-dot fc-event-success-dot"></span> Success</li>
                                <li><span class="fc-event-dot fc-event-danger-dot"></span> Danger</li>
                                <li><span class="fc-event-dot fc-event-warning-dot"></span> Warning</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-body">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop