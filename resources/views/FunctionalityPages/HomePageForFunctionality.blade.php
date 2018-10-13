@extends('Layouts.MainLayout')

@section('title')
    Functionality Home page
@endsection

@section('head')
    <style>
        .card:hover {
            border-color: darkblue;
            border-style: solid;
            border-width: 1px;
        }

    </style>

@endsection

@section('content')
    @include('Layouts.MainNavbar')

    <div class="jumbotron text-center" style="background: #6cb2eb">
        <h1 class="display-4">Functionality Home Page</h1>
        <p class="lead">Any specific ability that I want to learn it will be here</p>
    </div>


    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4 class="my-0 font-weight-normal">Login</h4>
                </div>
                <div class="card-body d-flex flex-column"  style="background-color: #C8E6C9">
                    <p class="text-left">This page includes Different type of login and the abilities present using it.</p>
                    <h3 class="text-left">It includes:</h3>
                    <ul class="list-group text-left">
                        <li class="list-group-item font-italic"  style="background-color: #DCEDC8">Social Login -facebook and twitter</li>
                        <li class="list-group-item font-italic"  style="background-color: #DCEDC8">Authentication - native laravel</li>
                        <li class="list-group-item font-italic"  style="background-color: #DCEDC8">Authorization - Gates/</li>
                        <li class="list-group-item font-italic"  style="background-color: #DCEDC8">Security</li>
                    </ul>
                    <br/>
                    <a class="btn btn-lg btn-block btn-outline-success mt-auto" href="/LoginFunctionality"
                       role="button">Here To login choices</a>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-danger text-white">
                    <h4 class="my-0 font-weight-normal">Database</h4>
                </div>
                <div class="card-body d-flex flex-column"  style="background-color: #F8BBD0">
                    <p class="text-left">This page includes manipulation of the database and it`s functions.</p>
                    <h3 class="text-left">It includes:</h3>
                    <ul class="list-group text-left">
                        <li class="list-group-item font-italic"  style="background-color: #FFCDD2">View/Filter</li>
                        <li class="list-group-item font-italic"  style="background-color: #FFCDD2">Add/Remove</li>
                        <li class="list-group-item font-italic"  style="background-color: #FFCDD2">Update</li>
                        <li class="list-group-item font-italic"  style="background-color: #FFCDD2">RESTful API</li>
                        <li class="list-group-item font-italic"  style="background-color: #FFCDD2">Validations</li>
                    </ul>
                    <br/>
                    <a class="btn btn-lg btn-block btn-outline-danger mt-auto" href="/DatabaseFunctionality"
                       role="button">Here To Database</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="my-0 font-weight-normal">Tasks</h4>
                </div>
                <div class="card-body d-flex flex-column"  style="background-color: #BBDEFB">
                    <p class="text-left">This page includes single seperated Tasks with their Manipulations.</p>
                    <h3 class="text-left">It includes:</h3>
                    <ul class="list-group text-left">
                        <li class="list-group-item font-italic"  style="background-color: #B3E5FC">Upload A picture</li>
                        <li class="list-group-item font-italic"  style="background-color: #B3E5FC">Filter results -not datatable</li>
                        <li class="list-group-item font-italic"  style="background-color: #B3E5FC">JSON weather</li>
                        <li class="list-group-item font-italic"  style="background-color: #B3E5FC">AJAX request</li>
                        <li class="list-group-item font-italic"  style="background-color: #B3E5FC">Graph -done</li>
                    </ul>
                    <br/>
                    <a class="btn btn-lg btn-block btn-outline-primary mt-auto" href="/TasksFunctionality"
                       role="button">Here To Tasks</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#FunctionalityHomePage').addClass('active');
        });
    </script>
@endsection
