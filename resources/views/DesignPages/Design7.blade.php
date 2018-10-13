@extends('Layouts.MainLayout')

@section('title')
    Design 7
@endsection

@section('head')
    <style>
        nav > a {
            color: black;
        }

        .nav-pills .nav-link {
            border-radius: 0;
        }

        nav > a:hover {
            color: black;
            background-color: #c6c6c6;
        }

        .carousel-control-prev,
        .carousel-control-next {
            top: auto;
            bottom: auto;
            font-size: 200%;
        }
    </style>
@endsection

@section('content')
    <nav class="nav nav-pills nav-fill sticky-top" style="background-color: #f1f1f1">
        <a class="nav-item nav-link" href="#">Home</a>
        <a class="nav-item nav-link" href="#">Plans</a>
        <a class="nav-item nav-link" href="#">About</a>
        <a class="nav-item nav-link" href="#">Contact</a>
    </nav>
    <div class="d-flex justify-content-center flex-column p-5">
        <h1><b>MARKETING</b></h1>
        <div class="pt-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('DesignImages/house2.jpg')}}" alt="First slide">
                        <div id="MainImageName" style="position: absolute;top: 2%;left: 2%;" class="bg-light p-3">
                            Living House 1
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('DesignImages/house3.jpg')}}" alt="Second slide">
                        <div id="MainImageName" style="position: absolute;top: 2%;left: 2%;" class="bg-light p-3">
                            Living House 2
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('DesignImages/house5.jpg')}}" alt="Third slide">
                        <div id="MainImageName" style="position: absolute;top: 2%;left: 2%;" class="bg-light p-3">
                            Living House 3
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fa fa-arrow-circle-left" aria-hidden="true" style="bottom: 0"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fa fa-arrow-circle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="p-3" style="background-color: #616161;bottom: 0;">
                    <ol class="carousel-indicators" style="bottom: 0">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="d-flex justify-content-center">
                <h3 style="border-bottom: thick solid #616161;display: inline-block;">What We Offer</h3>
            </div>
            <div class="pt-3">
                <div class="row">
                    <div class="col-md-6 p-3" style="background-color: #f1f1f1">
                        <h3>Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequuntur cupiditate
                            distinctio eaque et excepturi minima, necessitatibus, nihil numquam officiis pariatur
                            perspiciatis provident quia repellat sapiente sequi vero voluptate.</p>
                    </div>
                    <div class="col-md-6 p-3" style="background-color: #9e9e9e">
                        <h3>Branding</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequuntur cupiditate
                            distinctio eaque et excepturi minima, necessitatibus, nihil numquam officiis pariatur
                            perspiciatis provident quia repellat sapiente sequi vero voluptate.</p>
                    </div>
                </div>
                <div class="row text-light">
                    <div class="col-md-6 p-3" style="background-color: #626262">
                        <h3>Consultation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequuntur cupiditate
                            distinctio eaque et excepturi minima, necessitatibus, nihil numquam officiis pariatur
                            perspiciatis provident quia repellat sapiente sequi vero voluptate.</p>
                    </div>
                    <div class="col-md-6 p-3" style="background-color: #000000">
                        <h3>Promises</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi consequuntur cupiditate
                            distinctio eaque et excepturi minima, necessitatibus, nihil numquam officiis pariatur
                            perspiciatis provident quia repellat sapiente sequi vero voluptate.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="d-flex justify-content-center">
                <h3 style="display: inline-block;">Pricing Plans</h3>
            </div>
            <div class="d-flex justify-content-center">
                <p style="display: block;">Choose a pricing plan that fits your needs.</p>
            </div>
            <div class="card-deck text-center">
                <div class="card" style="border-radius: 0">
                    <div class="card-header text-light bg-dark" style="border-radius: 0">
                        Basic
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>10GB</b> Storage</li>
                        <li class="list-group-item"><b>10</b> Emails</li>
                        <li class="list-group-item"><b>10</b> Domains</li>
                        <li class="list-group-item"><b>Endless</b> Support</li>
                    </ul>
                    <div class="card-body">
                        <h2>25$</h2>
                        <p>per month</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" style="border-radius: 0">Sign Up</button>
                    </div>
                </div>
                <div class="card" style="border-radius: 0">
                    <div class="card-header text-light bg-dark" style="border-radius: 0">
                        Pro
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>25GB</b> Storage</li>
                        <li class="list-group-item"><b>25</b> Emails</li>
                        <li class="list-group-item"><b>25</b> Domains</li>
                        <li class="list-group-item"><b>Endless</b> Support</li>
                    </ul>
                    <div class="card-body">
                        <h2>50$</h2>
                        <p>per month</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" style="border-radius: 0">Sign Up</button>
                    </div>
                </div>
                <div class="card" style="border-radius: 0">
                    <div class="card-header text-light bg-dark" style="border-radius: 0">
                        Premium
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>50GB</b> Storage</li>
                        <li class="list-group-item"><b>50</b> Emails</li>
                        <li class="list-group-item"><b>50</b> Domains</li>
                        <li class="list-group-item"><b>Endless</b> Support</li>
                    </ul>
                    <div class="card-body">
                        <h2>85$</h2>
                        <p>per month</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" style="border-radius: 0">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="d-flex justify-content-center">
                <h3 style="border-bottom: thick solid #616161;display: inline-block;">Contact Us</h3>
            </div>
            <form>
                <div class="form-group">
                    <label for="formitem1">Name</label>
                    <input id="formitem1" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="formitem2">Email</label>
                    <input id="formitem2" type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="formitem3">Message</label>
                    <textarea id="formitem3" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-dark btn-block">
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="background-color: #f1f1f1">
        <footer class="footer p-2">
            <h5 class="p-3" style="text-align: center">Footer</h5>
            <a href="#" class="btn bg-dark" style="border-radius: 0; color: white"><i class="fa fa-fw fa-arrow-up"></i>
                To the top</a>
            <p class="pt-3" style="text-align: center"><i class="fa fa-facebook-square"></i> <i
                    class="fa fa-instagram"></i> <i class="fa fa-snapchat"></i> <i class="fa fa-pinterest-p"></i> <i
                    class="fa fa-twitter"></i> <i class="fa fa-linkedin"></i></p>
        </footer>
    </div>
@endsection
