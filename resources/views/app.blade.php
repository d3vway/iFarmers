@extends('layouts.master')
@section('title', 'Live Dashboard')

@section('content')
    <div class="row">
        <div class="col-md">
            <h2>Dashboard</h2>
            <div id="dashboard_content"></div>
            @include('components.cards')
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
                        CARDTIME: new Date(),
                        DETAILURL: "/",
                        OBJECTID: "OBJECTID",
                        OBJECTTYPE: "OBJECTTYPE",
                        KEYWORD: "KEYWORD"
                    };
            const cardTemplate = $("div#template-card").html();

            Pusher.logToConsole = true;
            window.Echo.private('my-channel')
                .listen('EmployeeUpdated', (e) => {
                    arrData = {
                        CARDHEADER: "Employe " + window.capz(e.action), 
                        CARDTITLE: e.name,
                        CARDBODY: `Age ${e.age}, Salary $.${e.salary}`, 
                        CARDTIME: new Date(),
                        DETAILURL: `/admin/employees/${e.id}`,
                        OBJECTID: e.id,
                        OBJECTTYPE: "EMPLOYEE",
                        KEYWORD: e.name
                    };
                    let tmpl = cardTemplate;
                    tmpl = window.fillCard(arrData, tmpl);
                    $("div#dashboard_content").prepend(tmpl);
                })
                .listen('SurveyUpdated', (e) => {
                    arrData = {
                        CARDHEADER: "Survey " + window.capz(e.action), 
                        CARDTITLE: e.farm_name,
                        CARDBODY: e.product + ", " +e.weight + "kg", 
                        CARDTIME: new Date(),
                        DETAILURL: `/admin/surveys/${e.id}`,
                        OBJECTID: e.id,
                        OBJECTTYPE: "SURVEY",
                        KEYWORD: e.product
                    };
                    let tmpl = cardTemplate;
                    tmpl = window.fillCard(arrData, tmpl);
                    $("div#dashboard_content").prepend(tmpl);
                });
        });
    </script>
@stop
