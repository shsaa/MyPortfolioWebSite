@extends('Layouts.MainLayout')

@section('title')
    Design 1
@endsection

@section('head')
    <style>
        img.rounded {
            padding: 2.5px;
        }

        img.rounded:hover {
            border-color: #231a8b;
            border-style: solid;
            border-width: 1.5px;
        }

        .card {
            padding: 1.5px;
        }

        .card:hover {
            border-color: darkblue;
            border-style: solid;
            border-width: 1px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            top: 75%;
        }

        #PageTitle {
            font-family: "Times New Roman", Times, serif;
            font-style: oblique;
            font-size: 600%;
        }

    </style>
@endsection

@section('content')
    <div class="text-center bg-dark" id="firstDivision">
        <a href="" class="nav-link" id="PageTitle"> Site Name </a>
        <p class="font-weight-light" style="color: #a1cbef"> This is the first design. Try to click on any card to show its details that is auto-generated using JavaScript. Also the button 'show more' can reveal more data.</p>
        <br/>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: #B2DFDB">
            <li class="breadcrumb-item"><a href="/HomePageForDesigns">Home Page</a></li>
            <li class="breadcrumb-item active"><a href="/Design1">Design 1</a></li>
            <li class="breadcrumb-item "><a href="/Design2">Design 2</a></li>
            <li class="breadcrumb-item "><a href="/Design3">Design 3</a></li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" id="CarouselNumbers">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>

            <div class="carousel-inner container-fluid" id="carouselContainer">
                <div class="carousel-item active btn" id="CarouselItem0">


                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br/>

    <div class="container-fluid" id="TheCardsContainer">
        <div class="row" id="TheImagesRow">

        </div>
    </div>

    <br/>
    <br/>

    <div class="container mt-3" id="TheModalContainer">
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #009688;">
                        <h4 class="modal-title" id="TheModalTitle">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-block btn-info" id="ShowMoreButton"> Show More ...</button>
    <footer class="bg-dark text-center" style="font-size: 120%;position: relative;bottom:0;width:100%;">
        <span>
            <label class="text-white">
                All Rights Reserved.
            </label>
            <a href="#firstDivision" class="float-right"><i class="fa fa-arrow-up"> Up</i></a>
        </span>
    </footer>
@endsection

@section('script')
    <script>
        let NumberOfImagesAssumed = 25;
        let WindowWidth = (window.innerWidth);
        let NumberOfImagesCapable = Math.floor(WindowWidth / (170 + 5));
        let NumberOfCarouselNeeded = Math.ceil(NumberOfImagesAssumed / NumberOfImagesCapable);

        $(document).ready(function () {
                /*window.addEventListener("resize", function () {
                });*/

                if (NumberOfImagesAssumed < 1) {
                    $("#carouselExampleIndicators").remove();
                    $("#TheCardsContainer").remove();
                    $("#TheModalContainer").remove();
                }
                else {

                    let CarouselIdentityNumber = 0;
                    //number of images inside each carousel
                    for (let i = 0; i < NumberOfImagesCapable; i++) {
                        CarouselIdentityNumber++;
                        $("#CarouselItem0").append('<img src="/images/simple.png" alt="Image in Carousel Identity Number ' + CarouselIdentityNumber + '" class="rounded" width="170px" height="220px" data-toggle="modal" data-target="#myModal"> ')
                    }
                    if (NumberOfCarouselNeeded > 1) {
                        for (let i = 1; i < NumberOfCarouselNeeded; i++) {
                            $("#CarouselNumbers").append('<li data-target="#carouselExampleIndicators" data-slide-to=' + i + '></li>');
                        }

                        function appendImages(TheRound) {
                            let startingPoint = (NumberOfImagesCapable * TheRound) + 1;
                            let endingPoint = startingPoint + NumberOfImagesCapable;
                            if (TheRound === (NumberOfCarouselNeeded - 1)) {
                                endingPoint = startingPoint + (NumberOfImagesAssumed - startingPoint + 1);
                            }
                            let TheFullImages = '';
                            for (let i = startingPoint; i < endingPoint; i++) {
                                CarouselIdentityNumber++;
                                TheFullImages = TheFullImages + '<img src="/images/simple.png" alt="Image in Carousel Identity Number ' + CarouselIdentityNumber + '" class="rounded" width="170px" height="220px" data-toggle="modal" data-target="#myModal">';
                            }
                            return TheFullImages;
                        }

                        for (let i = 1; i < NumberOfCarouselNeeded; i++) {
                            $("#carouselContainer").append('<div class="carousel-item btn">' + appendImages(i) + '</div>');
                        }
                    }
                    let CardsIdentityNumber = 0;

                    /**
                     * @return {string}
                     */
                    function InjectImages() {
                        let ImagesToInject = '';
                        for (i = 0; i < 4; i++) {
                            CardsIdentityNumber++;
                            ImagesToInject = ImagesToInject +
                                '<div class="col">' +
                                '           <div class="card" style="width: 100%;" data-toggle="modal" data-target="#myModal">' +
                                '               <div class="card-header" style="background-color: #009688">\n' +
                                '                    <h5 class="card-title">' +
                                'Identity Number ' + CardsIdentityNumber +
                                '</h5>\n' +
                                '                </div>\n' +
                                '                <img class="card-img-top" src="{{asset("images/simple.png")}}" ' +
                                'alt="Identity Number ' + CardsIdentityNumber +
                                '">\n' +
                                '                <div class="card-body">\n' +
                                '                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>\n' +
                                '                    <p class="card-text">Some example text and make up the card\'s content.</p>\n' +
                                '                    <a href="#" class="card-link">Card link</a>\n' +
                                '                </div>\n' +
                                '                <div class="card-footer text-muted" style="background-color: #B2DFDB">\n' +
                                '                    <i class="fa fa-clock-o"> 2 days ago </i>\n' +
                                '                </div>\n' +
                                '            </div>\n' +
                                '        </div>';
                        }
                        return ImagesToInject;
                    }

                    $("#TheImagesRow").append(InjectImages);

                    $("#ShowMoreButton").click(function () {
                            $("#TheCardsContainer").append(' <br/> <div class="row">' + InjectImages() + '</div>');
                        }
                    );
                    $('#myModal').on('shown.bs.modal', function (event) {
                        var triggerElement = $(event.relatedTarget); // Button that triggered the modal
                        if (triggerElement.attr("src") === undefined) {
                            $("#TheModalTitle").html(triggerElement.find(".card-title").html());
                        }
                        else {
                            $("#TheModalTitle").html(triggerElement.attr("alt"));

                        }
                    });
                }
            }
        );
    </script>
@endsection
