@extends('Layouts.MainLayout')
@section('title')
    Design 3
@endsection
@section('head')
<style>
    .nav-item:hover{
        background-color: #F8BBD0;
    }
</style>
@endsection
@section('content')
    <ul class="nav nav-tabs nav-fill" id="FirstRow" style="background-color: #E1BEE7">
        <li class="nav-item">
            <a class="nav-link" href="/home">Home Page</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/HomePageForDesigns">Designs Home Page</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Design1">Design 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Design2">Design 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/Design3">Design 3</a>
        </li>
    </ul>

    <br/>

    <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>

    <br/>

    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active" title="This is the page" data-toggle="tooltip" data-placement="bottom">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <footer class="text-center" style="font-size: 110%;position: relative;bottom:0;width:100%;background-color: #E1BEE7;">
        <span>
            <label class="">
                All Rights Reserved.
            </label>
            <a href="#FirstRow" class="float-right"><i class="fa fa-arrow-up"> Up</i></a>
        </span>
    </footer>
@endsection
@section('script')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
