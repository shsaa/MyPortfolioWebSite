@extends('Layouts.MainLayout')
@section('title')
    Design 2
@endsection
@section('head')
    <style>
        #PageTitle {
            font-family: "Times New Roman", Times, serif;
            font-style: oblique;
        }

        .MyHover:hover {
            color: #CDDC39;
        }

        #StartingRow {
            background: url("{{asset('images/bannerBar.jpg')}}") no-repeat;
            background-size: 100% 100%;
            height: 100px;
        }

        #SearchTextBox:focus {
            border-color: #CDDC39;
            border-style: solid;
            border-width: 5px;
        }

        #SearchTextBox {
            display: none;
            height: 80px;
            width: 95%;
            align-content: center;
            opacity: 0.7;
            margin: 10px;
        }

        body {
            position: relative;
            height: 100%;
        }

        .card {
            padding: 1.5px;
        }

        .card:hover {
            border-color: darkblue;
            border-style: solid;
            border-width: 1px;
        }

    </style>
@endsection

@section('content')

    <div class="container-fluid" id="StartingRow">
        <div class="d-flex justify-content-center">
            <input id="SearchTextBox" class="form-control" type="search" placeholder="Search" aria-label="Search">
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #4CAF50;font-size: 120%;">
        <a class="navbar-brand" id="PageTitle" href="/Design2" style="font-size: 120%;">Site name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/Design1">Design1</a>
                <a class="nav-item nav-link active" href="/Design2">Design2</a>
                <a class="nav-item nav-link" href="/Design3">Design3</a>
            </div>
        </div>
        <i class="fa fa-search btn MyHover" id="SearchIcon" style="font-size: 150%"></i>
    </nav>

    <br/>
    <br/>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-1 col-4 " id="myScrollspy">
                <ul class="nav nav-pills flex-column" style="position: fixed;" id="TheScrollSpyLinks">
                    <li class="nav-item">
                        <a class="nav-link" href="#StartingRow">Overview</a>
                    </li>
                </ul>
            </nav>

            <div class="col-sm-11 col-8" id="TheScrollSpyContent">

            </div>
        </div>
    </div>
    <footer class="bg-dark text-center" style="font-size: 110%;position: relative;bottom:0;width:100%;">
        <span>
            <label class="text-white">
                All Rights Reserved.
            </label>
            <a href="#StartingRow" class="float-right"><i class="fa fa-arrow-up"> Up</i></a>
        </span>
    </footer>
@endsection

@section('script')
    <script>

        $(document).ready(function () {
                $("#SearchIcon").click(function () {
                    $("#SearchTextBox").slideToggle();
                });

                $("body").attr({
                    "data-spy": "scroll",
                    "data-target": "#myScrollspy",
                });

                TheNumberOfItemsInScrollSpy(8);

                function TheNumberOfItemsInScrollSpy(NumberOfTimes) {
                    for (let i = 1; i <= NumberOfTimes; i++) {
                        $("#TheScrollSpyLinks").append(InjectScrollSpyLinks(i));
                        $("#TheScrollSpyContent").append(InjectScrollSpyContent(i))
                    }
                }

                /**
                 * @return {string}
                 */
                function InjectScrollSpyLinks(ItemSequence) {
                    return '<li class="nav-item">' +
                        '<a class="nav-link" href="#section' + ItemSequence + '">Section ' + ItemSequence + '</a>' +
                        '</li>';
                }

                /**
                 * @return {string}
                 */
                function InjectScrollSpyContent(ItemSequence) {
                    return '                <div id="section' + ItemSequence + '">\n' +
                        '                    <div class="card text-center">\n' +
                        '                            <a class="card-link" data-toggle="collapse" href="#collapse' + ItemSequence + '">\n' +
                        '                        <div class="card-header" style="background-color: #C8E6C9">\n' +
                        '                                Collapsible Group Item #' + ItemSequence + '' +
                        '                                <span class="badge badge-secondary">New</span>\n' +
                        '                            </div>\n' +
                        '                        </a>\n' +
                        '                        <div id="collapse' + ItemSequence + '" class="collapse">\n' +
                        '                            <div class="card-body">\n' +
                        '                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor\n' +
                        '                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\n' +
                        '                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="card-footer text-muted">\n' +
                        '                            here is a text\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '                <br/>';
                }
            }
        )
    </script>
@endsection
