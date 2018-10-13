@extends('Layouts.MainLayout')

@section('title')
    Design 5
@endsection

@section('head')
    <style>

        body {
            background-color: black;
        }

        a > .fa {
            font-size: 200%;
        }

        .btn-block {
            color: white;
            border-radius: 0;
        }

        .btn-block.active {
            color: white;
            background-color: black;
            border-radius: 0;
        }

        .btn-block:hover {
            background-color: white;
            color: black;
            border-radius: 0;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 bg-dark p-0">
                <nav class="sticky-top">
                    <ul class="nav d-flex flex-column">
                        <li>
                            <img src="{{asset('DesignImages/architect.jpg')}}" alt="No Pict" class="w-100"
                                 style="opacity: 0.5">
                        </li>
                        <li>
                            <a href="#" class="btn btn-block active">
                                <i class="fa fa-home"></i>
                                <p style="margin: 0">HOME</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-block">
                                <i class="fa fa-user"></i>
                                <p style="margin: 0">ABOUT</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-block">
                                <i class="fa fa-eye"></i>
                                <p style="margin: 0">PHOTOS</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-block">
                                <i class="fa fa-envelope"></i>
                                <p style="margin: 0">CONTACT</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-md-11">
                <div class="d-flex justify-content-center text-light">
                    <div class="d-block" style="text-align: center;">
                        <div class="container-fluid">
                            <h1>This is My Work.</h1>
                            <p>Front-End Web Developer</p>
                            <img class="w-100 h-auto" src="{{asset('DesignImages/architect.jpg')}}" alt="No Picture">

                        </div>

                        <div class="mt-3" style="text-align: left">
                            <div class="container-fluid">
                                <div>
                                    <h2>My Name</h2>
                                    <hr class="border-light"/>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo impedit incidunt
                                        nam
                                        repellendus tempore? Beatae in iusto nisi, obcaecati officia perspiciatis quas
                                        temporibus voluptatum. Blanditiis consequatur dolorem maiores ratione
                                        voluptate.</p>
                                </div>
                                <div>
                                    <h2>My Skills</h2>
                                    <hr class="border-light"/>
                                    <label>Web Design</label>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                             style="width: 60%; background-color: #616161"></div>
                                    </div>
                                    <br/>
                                    <label>Web Development</label>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                             style="width: 70%; background-color: #616161"></div>
                                    </div>

                                    <div class="d-flex justify-content-center bg-light text-dark mt-3"
                                         style="text-align: center">
                                        <div class="col-md-3 p-4">
                                            <h3>11+</h3>
                                            <h3>Partners</h3>
                                        </div>
                                        <div class="col-md-3 p-4">
                                            <h3>55+</h3>
                                            <h3>Projects Done</h3>
                                        </div>
                                        <div class="col-md-3 p-4">
                                            <h3>89+</h3>
                                            <h3>Happy Clients</h3>
                                        </div>
                                        <div class="col-md-3 p-4">
                                            <h3>150+</h3>
                                            <h3>Meetings</h3>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="btn btn-light p-2" style="border-radius: 0"><i
                                            class="fa fa-download"></i>
                                        Download Resume
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mt-3">My Prices</h2>
                                    <hr class="border-light"/>

                                    <div class="card-deck">
                                        <div class="card" style="border-color: black; text-align: center">
                                            <div class="card-header bg-secondary" style="font-size: 200%">
                                                Basic
                                            </div>
                                            <ul class="list-group list-group-flush text-dark">
                                                <li class="list-group-item">Web Design</li>
                                                <li class="list-group-item">Photography</li>
                                                <li class="list-group-item">5GB Support</li>
                                                <li class="list-group-item">Mail Support</li>
                                            </ul>
                                            <div class="card-body text-dark">
                                                <h2>$ 10</h2>
                                                <p>per month</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn btn-light pt-2 pb-2 pl-3 pr-3"
                                                     style="border-radius: 0; background-color: white">
                                                    Sign Up
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="border-color: black; text-align: center">
                                            <div class="card-header bg-secondary" style="font-size: 200%">
                                                Basic
                                            </div>
                                            <ul class="list-group list-group-flush text-dark">
                                                <li class="list-group-item">Web Design</li>
                                                <li class="list-group-item">Photography</li>
                                                <li class="list-group-item">50GB Support</li>
                                                <li class="list-group-item">Endless Support</li>
                                            </ul>
                                            <div class="card-body text-dark">
                                                <h2>$ 25</h2>
                                                <p>per month</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="btn btn-light pt-2 pb-2 pl-3 pr-3"
                                                     style="border-radius: 0; background-color: white">
                                                    Sign Up
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mt-3">Contact Me</h2>
                                    <hr class="border-light"/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-2" style="font-size: 200%;">
                                                    <div class="d-flex align-content-center flex-column" style="text-align: center">
                                                        <i class="fa fa-map-marker p-3"></i>
                                                        <i class="fa fa-phone p-3"></i>
                                                        <i class="fa fa-envelope p-3"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" >
                                                    <div class="d-flex flex-column" style="color: #656565">
                                                        <label class="p-3">Chicago, US</label>
                                                        <label class="p-3">Phone: 0000000</label>
                                                        <label class="p-3">Email: mail@mail.com</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <form>
                                        <label style="color: #656565">Lets get in touch, Send me a message</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                        <br/>
                                        <input type="Email" class="form-control" placeholder="Enter Email">
                                        <br/>
                                        <input type="text" class="form-control" placeholder="Enter Subject">
                                        <br/>
                                        <textarea  class="form-control" placeholder="Enter Message"></textarea>
                                        <br/>
                                        <button class="btn btn-light"><i class="fa fa-send">SEND MESSAGE</i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
