@extends('admin.layouts.layout-basic')
@section('scripts')
@section('scripts')
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                defaultDate: '2017-05-12',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                events: [
                    {
                        title: 'Business Lunch',
                        start: '2017-05-03T13:00:00',
                        constraint: 'businessHours'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-05-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: '#257e4a'
                    },
                    {
                        title: 'Conference',
                        start: '2017-05-18',
                        end: '2017-05-20'
                    },
                    {
                        title: 'Party',
                        start: '2017-05-29T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        id: 'availableForMeeting',
                        start: '2017-05-11T10:00:00',
                        end: '2017-05-11T16:00:00',
                        rendering: 'background'
                    },
                    {
                        id: 'availableForMeeting',
                        start: '2017-05-13T10:00:00',
                        end: '2017-05-13T16:00:00',
                        rendering: 'background'
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2017-05-24',
                        end: '2017-05-28',
                        overlap: false,
                        rendering: 'background',
                        color: '#ff9f89'
                    },
                    {
                        start: '2017-05-06',
                        end: '2017-05-08',
                        overlap: false,
                        rendering: 'background',
                        color: '#ff9f89'
                    }
                ]
            });

        });

    </script>
@stop
@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Calendar</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Basic UI</a></li>
                <li class="breadcrumb-item active">Calendar</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
