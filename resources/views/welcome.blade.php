@extends('Layouts.MainLayout')

@section('title')
    Main Page
@endsection

@section('head')
    <style>
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
@endsection

@section('content')
    @include('Layouts.MainNavbar').
    <div class="container-fluid">
        <div id="firstDivision" class="text-center p-3">
            <h1 class="p-2">S.Hashem Abdulaziz Hussain</h1>
            <h3>An Entry-Level Web Developer</h3>
            <a href="mailto:silv.say.hash@gmail.com"><i class="fa fa-envelope"> Email: silv.say.hash@gmail.com</i></a>
            <br/>
            <a href="https://github.com/shsaa/MyPortfolioWebSite"><i class="fa fa-github"> GitHub: https://github.com/shsaa/MyPortfolioWebSite</i></a>
        </div>
        <div class="container p-3">
            <h2>About me</h2>
            <hr/>
            <p>I am highly passionate about web development where I can create new things every day. I enjoy it and that
                is why I always give my best. I like learning new things and new technologies for the purpose of moving
                forward.</p>
        </div>
        <div class="container p-3">
            <h2>Things I am skilled at</h2>
            <hr/>
            <div class="row" style="background-color: #f1f1f1">
                <div class="col-md-3 text-center">
                    <img src="{{asset('PortfolioImages/HTML5.png')}}" alt="image is not available" class="p-2">
                    <h4 class="mt-auto">Hypertext Markup Language</h4>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('PortfolioImages/css3.png')}}" alt="image is not available" class="p-2">
                    <h4>Cascading Style Sheets</h4>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('PortfolioImages/js.png')}}" alt="image is not available" class="p-2">
                    <h4>JavaScript</h4>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('PortfolioImages/BS4.png')}}" alt="image is not available" class="p-2">
                    <h4>Bootstrap 4</h4>
                </div>
            </div>

            <div class="row" style="background-color: #e2e2e2">
                <div class="col-md-3 text-center">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 100px">
                        <img src="{{asset('PortfolioImages/jquey.png')}}" alt="image is not available" class="p-2">
                    </div>
                    <h4>Jquery</h4>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('PortfolioImages/mysql.png')}}" alt="image is not available" class="p-2">
                    <h4>SQL</h4>
                </div>
                <div class="col-md-3 text-center">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 100px">
                        <img src="{{asset('PortfolioImages/git.png')}}" alt="image is not available" class="p-2">
                    </div>
                    <h4 class="mt-auto">Git version-control</h4>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{asset('PortfolioImages/php.png')}}" alt="image is not available" class="p-2">
                    <h4>Php</h4>
                </div>
            </div>

            <div class="row" style="background-color: #d1d1d1">
                <div class="col-md-4 text-center">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 100px">
                        <img src="{{asset('PortfolioImages/laravel.png')}}" alt="image is not available" class="p-2">
                    </div>
                    <h4>Laravel</h4>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('PortfolioImages/restful api.png')}}" alt="image is not available" class="p-2">
                    <h4>RESTful API</h4>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 100px">
                        <img src="{{asset('PortfolioImages/asp.net mvc.png')}}" alt="image is not available"
                             class="p-2">
                    </div>
                    <h4>ASP.NET MVC</h4>
                </div>
            </div>
        </div>
        <div class="container p-3">
            <h2>My Portfolio</h2>
            <hr/>
            <div class="card-deck mb-3 text-center justify-content-center">
                <div class="card mb-4 shadow-sm" style="max-width: 350px">
                    <div class="card-header bg-info text-white">
                        <h4 class="my-0 font-weight-normal">Designs</h4>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p>This page includes designs using CSS, HTML and JS mainly to convert pdf/images to actual web
                            sites and focuses on providing as much as possible of items</p>

                        <a class="btn btn-lg btn-block btn-outline-primary mt-auto" href="/HomePageForDesigns"
                           role="button">Enter designs</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm" style="max-width: 350px">
                    <div class="card-header bg-info text-white">
                        <h4 class="my-0 font-weight-normal">Functionality</h4>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p>This page Focuses on the functionality, calculations and the ability to optimize the way of
                            things work toward more efficiency and effectiveness</p>

                        <a class="btn btn-lg btn-block btn-outline-primary mt-auto" href="/HomePageForFunctionality"
                           role="button">Enter
                            Functionality</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-3">
            <h2>Things I believe in</h2>
            <hr/>
            <div>
                <figure class="text-center" style="font-size: 150%">
                    <p><q>The journey of a thousand miles begins with one step.</q></p>
                    <figcaption>-Lao Tzu.</figcaption>
                </figure>
            </div>
        </div>
        <div class="container p-3">
            <h2>My education</h2>
            <hr/>
            <div class="p-3" style="background-color: #f1f1f1">
                <h3>B.Sc. In Information System. (GPA 3.05)</h3>
                <h5>University of Bahrain</h5>
                <p>2011 - 2016</p>
            </div>
            <div class="p-3" style="background-color: #e2e2e2">
                <h3>Information Technology Infrastructure Library (ITIL) Foundation.</h3>
                <h5>AXELOS</h5>
                <p>February 2017</p>
            </div>
            <div class="p-3" style="background-color: #d1d1d1">
                <h3>COBIT 5 Foundation</h3>
                <h5>ISACA</h5>
                <p>March 2016</p>
            </div>
        </div>
        <div class="container p-3">
            <h2>My Certificates</h2>
            <hr/>
            <div class="row p-3">
                <div class="col-md-2">
                    <img src="{{asset('PortfolioImages/capm.gif')}}" alt="Image is not available">
                </div>
                <div class="col-md-10">
                    <h3> Certified Associate in Project Management (CAPM).</h3>
                    <h5>PMI</h5>
                    <p>May 2017</p>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-2">
                    <img src="{{asset('PortfolioImages/toastmaster.png')}}" alt="Image is not available">
                </div>
                <div class="col-md-10">
                    <h3>Excom Chartered Member (V.P. Education)</h3>
                    <h5>Toastmasters international In Speakout Toastmasters Club </h5>
                    <p>July 2015</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-center" style="position: relative;bottom:0;width:100%;">
        <label class="text-white">
            &copy; All Rights Reserved.
        </label>
        <a href="#firstDivision" class="float-right" style="font-size: 120%;"><i class="fa fa-arrow-up"> Up</i></a>
    </footer>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#AboutHomePage').addClass('active');
        })
    </script>
@endsection
