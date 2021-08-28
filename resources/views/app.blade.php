@extends('layouts.master')
@section('title', 'Live Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Dashboard</h2>
                <div id="dashboard_content"></div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function() {
            Pusher.logToConsole = true;

            window.Echo.private('my-channel')
                .listen('EmployeeUpdated', (e) => {
                    console.log("EmployeeUpdated", (e));
                    $("div#dashboard_content").append(JSON.stringify(e));
                })
                .listen('SurveyUpdated', (e) => {
                    console.log("SurveyUpdated", (e));
                    $("div#dashboard_content").append(JSON.stringify(e));
                });
        });
    </script>
@stop
