@extends('Layouts.MainLayout')

@section('title')
    Main Page
@endsection

@section('head')
    <style>
        #HoverTheCard:hover {
            border-color: darkblue;
            border-style: solid;
            border-width: 1px;
        }

    </style>
@endsection

@section('content')

    <div class="jumbotron text-center" style="background: #6cb2eb">
        <h1 class="display-4">My Site</h1>
        <p class="lead">This is another built by me, more organized, to present my skills.</p>
        <hr class="my-4">
        <p>It is divided into three categories as shown below</p>
    </div>


    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm" id="HoverTheCard">
                <div class="card-header bg-info text-white">
                    <h4 class="my-0 font-weight-normal">Designs</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>This page includes designs using CSS, HTML and JS and focuses on providing as much as possible of
                        items</p>

                    <a class="btn btn-lg btn-block btn-outline-primary mt-auto" href="/HomePageForDesigns"
                       role="button">Enter designs</a>

                </div>
            </div>

            <div class="card mb-4 shadow-sm" id="HoverTheCard">
                <div class="card-header bg-info text-white">
                    <h4 class="my-0 font-weight-normal">Functionality</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>This page Focuses on the functionality, calculations and the ability to optimize the way of thing
                        toward more efficiency and effectiveness</p>

                    <a class="btn btn-lg btn-block btn-outline-primary mt-auto" href="/HomePageForFunctionality"
                       role="button">Enter
                        Functionality</a>

                </div>
            </div>

            <div class="card mb-4 shadow-sm" id="HoverTheCard">
                <div class="card-header bg-info text-white">
                    <h4 class="my-0 font-weight-normal">Ideas</h4>
                </div>
                <div class="card-body d-flex flex-column">
                    <p>This page presents a variety of ideas to be implemented fully from scratches when ever I would
                        like to add any</p>

                    <a class="btn btn-lg btn-block btn-outline-primary mt-auto" href="/HomePageForIdeas" role="button">Enter
                        Ideas</a>

                </div>
            </div>
        </div>
    </div>
@endsection

