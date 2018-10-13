@extends('Layouts.MainLayout')

@section('title')
    Design 8
@endsection

@section('head')
    <style>

        body {
            background-color: #ffffff;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #c6c6c6;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 2%;
        }

        .sidenav a {
            padding-left: 10%;
            text-decoration: none;
            font-size: 150%;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover:not(.closebtn) {
            color: #f1f1f1;
            background-color: #9e9e9e;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 5%;
            font-size: 200%;
            margin-left: 5%;
        }

        .page-link {
            border: none;
            color: black;
        }

        img {
            width: 100%;
        }

        div.col-md-3 > img {
            height: 300px;
            padding-bottom: 5%;
        }
    </style>
@endsection

@section('content')
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" class="mt-1">About</a>
        <a href="#">Contact</a>
    </div>

    <ul class="nav justify-content-center p-3">
        <li class="mr-auto">
            <span style="font-size:200%;cursor:pointer" onclick="openNav()">&#9776;</span>
        </li>
        <li>
            <h3>My Food</h3>
        </li>
        <li class="ml-auto">
            <h3>Mail</h3>
        </li>
    </ul>

    <div class="container-fluid">
        <div class="p-3">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/diningroom.jpg')}}" alt="No Picture">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/livingroom2.jpg')}}" alt="No Picture">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/livingroom.jpg')}}" alt="No Picture">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/bedroom.jpg')}}" alt="No Picture">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/house2.jpg')}}" alt="No Picture">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/architect.jpg')}}" alt="No Picture">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/house3.jpg')}}" alt="No Picture" class="w-100">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('DesignImages/rocks.jpg')}}" alt="No Picture" class="w-100">
                    <h4>This is a title for this picture</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad beatae dicta dolores
                        ducimus eius enim eos expedita fugiat illum laborum nam omnis, sed sint tempore? Cumque dicta
                        minus quasi?</p>
                </div>
            </div>

            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <hr/>
        <div class="d-flex justify-content-center">
            <div class="d-block" style="text-align: center">
                <h3>About Me, The Food Man</h3>
                <img src="{{asset('DesignImages/architect.jpg')}}" alt="No Picture" class="w-75 p-3">
                <h3><b>I am Who I Am!</b></h3>
                <p style="font-style: italic">With Passion For Real, Good Food</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque autem consectetur, consequuntur
                    corporis dignissimos est eveniet expedita nihil officiis quisquam, quos recusandae repellat rerum,
                    saepe sed sit veniam vitae?</p>
            </div>
        </div>
        <hr/>
        <footer class="footer p-3">
            <div class="row">
                <div class="col-md-4">
                    <h3>FOOTER</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda culpa dicta dolore
                        ducimus eius exercitationem, in iure laborum odio officiis pariatur quisquam, quos sit vitae.
                        Asperiores debitis illo porro!</p>
                </div>
                <div class="col-md-4">
                    <h3>BLOG POSTS</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{asset('DesignImages/house2.jpg')}}" alt="No picture">
                        </div>
                        <div class="col-md-10">
                            <h5>Lorem</h5>
                            <p>any text here</p>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{asset('DesignImages/house3.jpg')}}" alt="No picture">
                        </div>
                        <div class="col-md-10">
                            <h5>again</h5>
                            <p>any text here</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>POPULAR TAGS</h3>
                    <button class="btn btn-dark" style="font-size: 130%">Travel</button>
                    <button class="btn text-light" style="background-color: #626262">Games</button>
                    <button class="btn text-light" style="background-color: #626262">Cities</button>
                    <button class="btn text-light" style="background-color: #626262">Skills</button>
                    <button class="btn text-light" style="background-color: #626262">Search</button>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {

        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "15%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
@endsection
