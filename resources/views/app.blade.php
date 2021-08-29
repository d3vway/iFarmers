@extends('layouts.master')
@section('title', 'Live Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Dashboard</h2>
                <div id="dashboard_content"></div>
                @include('components.cards')
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function() {
            var arrData = {
                        CARDHEADER: "CARDHEADER", 
                        CARDTITLE: "CARDTITLE",
                        CARDBODY: "CARDBODY", 
                        CARDTIME: new Date()
                    };
            const cardTemplate = $("div#template-card").html();

            Pusher.logToConsole = true;
            window.Echo.private('my-channel')
                .listen('EmployeeUpdated', (e) => {
                    arrData = {
                        CARDHEADER: "Employe " + e.action, 
                        CARDTITLE: e.name,
                        CARDBODY: e.age + "$." + e.salary, 
                        CARDTIME: new Date()
                    };
                    let tmpl = cardTemplate;
                    tmpl = window.fillCard(arrData, tmpl);
                    $("div#dashboard_content").append(tmpl);
                })
                .listen('SurveyUpdated', (e) => {
                    arrData = {
                        CARDHEADER: "Survey " + e.action, 
                        CARDTITLE: e.farm_name,
                        CARDBODY: e.product + ", " +e.weight + "kg", 
                        CARDTIME: new Date()
                    };
                    let tmpl = cardTemplate;
                    tmpl = window.fillCard(arrData, tmpl);
                    $("div#dashboard_content").append(tmpl);
                });
        });
    </script>
@stop
