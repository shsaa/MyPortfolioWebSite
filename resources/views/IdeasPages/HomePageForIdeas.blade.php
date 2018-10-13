@extends('Layouts.MainLayout')

@section('title')
    Ideas Home page
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

    <div class="jumbotron text-center" style="background: #f7ecb5">
        <h1 class="display-4">Ideas Home Page</h1>
        <p class="lead">Any extra independent Ideas/Website I want to present</p>
    </div>

    <div class="container-fluid p-5">
        <div class="d-flex justify-content-center">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header text-center">
                        Vue js App
                    </div>
                    <div class="card-body">
                        <p>This page presents a simple app with Vue js</p>
                    </div>
                    <div class="card-footer">
                        <a href="/VueApp" class="btn btn-primary btn-block">Vue js App</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#IdeasHomePage').addClass('active');
        });
    </script>
@endsection
