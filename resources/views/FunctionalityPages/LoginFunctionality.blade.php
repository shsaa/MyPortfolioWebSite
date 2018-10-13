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
    <div class="d-flex justify-content-center p-3">
        <p>This page presents the log in and registration functionality for two entities, it implements all log in functionality including resetting passwords and authorization.</p>
    </div>
    <div class="d-flex justify-content-center p-3">
        <a class="btn btn-lg btn-outline-success" href="/home"
           role="button">Log In for users</a>
        &nbsp;
        <a class="btn btn-lg btn-outline-success" href="/admin"
           role="button">Log In for admins</a>
    </div>

    <div class="d-flex justify-content-center p-3">
        <label class="text-primary">
            @include('auth.who')
        </label>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <h3>Use these credentials to log in</h3>
            <div class="container-fluid">
                <h5>User: exampleUser@example.com</h5>
                <h5>Pass: 123456</h5>
                <h5>Admin: Admin1@example.com</h5>
                <h5>Pass: 123456</h5>
                <h5>Super Admin: Admin2@example.com</h5>
                <h5>Pass: 123456</h5>
            </div>
        </div>
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
