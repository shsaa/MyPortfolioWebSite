@extends('Layouts.MainLayout')
@section('title')
    Designs Home Page
@endsection

@section('head')
    <style>
        .card:hover {
            border-color: darkblue;
            border-style: solid;
            border-width: 1px;
        }

        .card {
            margin-top: 1vh;
            margin-bottom: 1vh;
            max-width: 350px;
        }
    </style>
@endsection

@section('content')
    @include('Layouts.MainNavbar')

    <div class="jumbotron text-center" style="background-color: #B2EBF2">
        <h1 class="display-4">Designs Home Page</h1>
        <p>This page includes designs from what bootstrap can provide, pdf/image files converted to web site and it can
            be used as a reference. Also, it includes an approximated percentage of code language used and it is
            responsive.</p>
    </div>

    <div class="container-fluid">
        <div class="card-deck mb-4 text-center justify-content-center">
            <div class="card">
                <div class="card-header" style="background-color: #673AB7">
                    <p class="text-white">Design 1 Influenced from Games</p>
                </div>
                <div class="card-body d-flex flex-column" STYLE="background-color: #7C4DFF">
                    <p class="text-light">This page includes: containers, breadcrumb, carousel, modal, footer, up
                        link, cards, one modal with the details of the whichever item selected, organization of items
                        based on the window width manually, generating the items using Javascript.</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design1">1</a>
                </div>
                <div class="card-footer" style="background-color: #D1C4E9">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 39.4%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar"
                             style="width: 14.5%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 46.1%"><span class="text-dark">Javascript</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background-color: #E91E63">
                    <p class="text-white">Design 2 Influenced from Shopping</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #FF4081">
                    <p class="text-light align-self-start">This page includes: toggleable search box from icon, sticky
                        navbar, icons, containers, ScrollSpy, footer, up link, auto generated ScrollSpy links,cards and
                        toggleable cards` body.</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design2">2</a>
                </div>
                <div class="card-footer" style="background-color: #F8BBD0">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 32.9%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar"
                             style="width: 29.4%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 37.7%"><span class="text-dark">Javascript</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

            <div class="card">
                <div class="card-header " style="background-color: #388E3C">
                    <p class="text-white">Design 3</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #C8E6C9">
                    <p class="text-dark">This page includes: not yet completed, has tabs-navbar, footer, up link,
                        drobdown and pagination.</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design3">3</a>
                </div>
                <div class="card-footer" style="background-color: #DCEDC8">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 0%">
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar" style="width: 0%">
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 0%"><span class="text-dark"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

            <div class="card">
                <div class="card-header" style="background-color: #0097A7">
                    <p class="text-white">Design 4</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #00BCD4">
                    <p class="text-dark">This page includes: A full page design from image/pdf that has been
                        dublicate/converted to HTML/CSS/JS</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design4">4</a>
                </div>
                <div class="card-footer" style="background-color: #B2EBF2">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 94.7%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar" style="width: 5.3%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 0%"><span class="text-dark"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
            <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>

            <div class="card">
                <div class="card-header" style="background-color: #0097A7">
                    <p class="text-white">Design 5</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #00BCD4">
                    <p class="text-dark">This page includes: A full page design from image/pdf that has been
                        dublicate/converted to HTML/CSS/JS</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design5">5</a>
                </div>
                <div class="card-footer" style="background-color: #B2EBF2">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 75%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar" style="width: 25%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 0%"><span class="text-dark"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>

            <div class="card">
                <div class="card-header" style="background-color: #0097A7">
                    <p class="text-white">Design 6</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #00BCD4">
                    <p class="text-dark">This page includes: A full page design from image/pdf that has been
                        dublicate/converted to HTML/CSS/JS</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design6">6</a>
                </div>
                <div class="card-footer" style="background-color: #B2EBF2">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 64%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar" style="width: 29%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 7%"><span class="text-dark">Javascript</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
            <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>

            <div class="card">
                <div class="card-header" style="background-color: #0097A7">
                    <p class="text-white">Design 7</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #00BCD4">
                    <p class="text-dark">This page includes: A full page design from image/pdf that has been
                        dublicate/converted to HTML/CSS/JS</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design7">7</a>
                </div>
                <div class="card-footer" style="background-color: #B2EBF2">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 76%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar" style="width: 24%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 0%"><span class="text-dark"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" style="background-color: #0097A7">
                    <p class="text-white">Design 8</p>
                </div>
                <div class="card-body d-flex flex-column" style="background-color: #00BCD4">
                    <p class="text-dark">This page includes: A full page design from image/pdf that has been
                        dublicate/converted to HTML/CSS/JS</p>
                    <a role="button" class="btn btn-outline-light btn-lg btn-block mt-auto" href="/Design8">8</a>
                </div>
                <div class="card-footer" style="background-color: #B2EBF2">
                    <h4>Code Percentage</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                             role="progressbar" style="width: 66%">HTML
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                             role="progressbar" style="width: 31%">CSS
                        </div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                             role="progressbar" style="width: 3%"><span class="text-dark">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
            <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>

        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#DesignsHomePage').addClass('active');
        });
    </script>
@endsection
