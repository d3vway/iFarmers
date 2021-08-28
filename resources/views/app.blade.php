@extends('layouts.master')
@section('title', 'Live Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                One of three columns
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        Pusher.logToConsole = true;

        window.Echo.private('my-channel')
            .listen('EmployeeUpdated', (e) => {
                console.log("EmployeeUpdated", (e));
            })
            .listen('SurveyUpdated', (e) => {
                console.log("SurveyUpdated", (e));
            });
    </script>
@stop
