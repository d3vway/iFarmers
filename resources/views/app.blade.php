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
        function prependMe(cardTemplate, arrData, rowId) {
            let tmpl = cardTemplate;
            tmpl = window.fillCard(arrData, tmpl);
            $("div#dashboard_content").prepend(tmpl);
            $("div#" + rowId).hide();
            // $("div#"+rowId).css("display", "");
            $("div#" + rowId).show("slow");

        }
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
                        CARDTITLE: window.capz(e.name),
                        CARDBODY: `Age ${e.age}, Salary $.${e.salary}`,
                        CARDTIME: new Date(),
                        DETAILURL: `/admin/employees/${e.id}`,
                        OBJECTID: e.id,
                        OBJECTTYPE: "EMPLOYEE",
                        KEYWORD: e.name
                    };
                    prependMe(cardTemplate, arrData, `box-${arrData.OBJECTTYPE}-${arrData.OBJECTID}`);
                })
                .listen('SurveyUpdated', (e) => {
                    arrData = {
                        CARDHEADER: "Survey " + window.capz(e.action),
                        CARDTITLE: window.capz(e.farm_name),
                        CARDBODY: e.product + ", " + e.weight + "kg",
                        CARDTIME: new Date(),
                        DETAILURL: `/admin/surveys/${e.id}`,
                        OBJECTID: e.id,
                        OBJECTTYPE: "SURVEY",
                        KEYWORD: e.product
                    };
                    prependMe(cardTemplate, arrData, `box-${arrData.OBJECTTYPE}-${arrData.OBJECTID}`);
                });
        });
    </script>
@stop
