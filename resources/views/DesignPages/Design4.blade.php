@extends('Layouts.MainLayout')

@section('title')
    Design 4
@endsection

@section('head')
    <style>

    </style>
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top"><a class="navbar-brand" href="#">
            <b>B R</b>
            Architecture
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid"
         style="background: url({{asset('DesignImages/architect.jpg')}});background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="d-flex justify-content-center align-items-center"><b class="p-3 bg-light" style="opacity: 0.5">B
                R</b>&nbsp;
            <div style="color: #F9F9F9">Architecture</div>
        </div>
    </div>
    <div class="container">
        Project
        <hr/>
        <div class="card-deck">
            <div class="card bg-dark text-dark"><img class="card-img"
                                                     src="{{asset('DesignImages/house2.jpg')}}"
                                                     alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title">Image 1</h5>
                </div>
            </div>
            <div class="card bg-dark text-white"><img class="card-img"
                                                      src="{{asset('DesignImages/house3.jpg')}}"
                                                      alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title">Image 2</h5>
                </div>
            </div>
            <div class="card bg-dark text-white"><img class="card-img"
                                                      src="{{asset('DesignImages/house5.jpg')}}"
                                                      alt="Card image">
                <div class="card-img-overlay">
                    <h5 class="card-title">Image 3</h5>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="container">
        About
        <hr/>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, distinctio tempore cupiditate dolorum laborum
            maiores illum. Animi vitae aperiam, pariatur ut, veniam voluptate repudiandae? Placeat esse debitis ad quam
            eum.</p>
    </div>
    <br/>
    <div class="container">
        Contact
        <hr/>
        <strong>Get in touch with our team</strong>
        <div class="form-group">
            <input type="text" placeholder="Name" class="form-control">
        </div>

        <div class="form-group">
            <input type="email" placeholder="Email" class="form-control">
        </div>

        <div class="form-group">
            <textarea class="form-control" placeholder="Enter details"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </div>

    <br/>
@endsection

