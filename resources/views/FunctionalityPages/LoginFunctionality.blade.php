@extends('Layouts.MainLayout')

@section('title')
    Functionality Home page
@endsection

@section('head')
    <style>

    </style>
@endsection

@section('content')
    @include('Layouts.MainNavbar')
    <br/>
    <div class="d-flex justify-content-center">
        <a class="btn btn-lg btn-outline-success" href="/home"
           role="button">Log In for users</a>
        &nbsp;
        <a class="btn btn-lg btn-outline-success" href="/admin"
           role="button">Log In for admins</a>
    </div>

    <div class="d-flex justify-content-center">
        <label class="text-primary">
            @include('auth.who')
        </label>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#LoginPage').addClass('active');
            $('#FunctionalityHomePage').addClass('active');
        });
    </script>
@endsection
