@extends('Layouts.MainLayout')

@section('title')
    Design 6
@endsection

@section('head')
    <style>
        body {
            background-color: white;
        }

        a.btn-block {
            color: black;
            display: flex;
            justify-content: flex-start;
        }

        a.btn-block:hover {
            background-color: #b6b6b6;
            color: black;
            border-radius: 0;
        }

        div.row > div > img:not(.active) {
            opacity: 0.5;
        }

        div.row > div > img:hover {
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0" style="background-color: #f1f1f1">
                <nav class="sticky-top mt-3">
                    <div class="p-3">
                        <h2>Rental</h2>
                        <h2>from $99</h2>
                        <h3>per night</h3>
                    </div>
                    <br/>
                    <form class="p-3">
                        <div class="form-group">
                            <label for="Id1"> <i class="fa fa-calendar-check-o"> Check In</i></label>
                            <input type="date" id="Id1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Id2"> <i class="fa fa-calendar"> Check Out</i></label>
                            <input type="date" id="Id2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Id3"> <i class="fa fa-user"> Adults</i></label>
                            <input type="number" value="1" id="Id3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Id4"> <i class="fa fa-child"> Kids</i></label>
                            <input type="number" value="0" id="Id4" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-block" style="border-radius: 0"><i
                                class="fa fa-search"></i> Search availability
                        </button>
                    </form>
                    <br/>
                    <div>
                        <a href="#" class="btn btn-block p-3">
                            <i class="fa fa-building"> Apartment</i>
                        </a>
                        <a href="#" class="btn btn-block p-3">
                            <i class="fa fa-rss"> Subscribe</i>
                        </a>
                        <a href="#" class="btn btn-block p-3">
                            <i class="fa fa-envelope"> Contact</i>
                        </a>
                    </div>
                </nav>
            </div>
            <div class="col-md-10">
                <div>
                    <h2 class="text-success">The Apartment</h2>
                    <div class="container-fluid p-0" style="position: relative;text-align: center;color: white;">
                        <img id="MainImage" src="{{asset("DesignImages/livingroom.jpg")}}" class="w-100">
                        <div id="MainImageName" style="position: absolute;bottom: 0;left: 0;" class="bg-dark p-3">Living
                            Room
                        </div>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col-md-3">
                            <img src="{{asset("DesignImages/livingroom.jpg")}}" name="Living Room"
                                 class="btn p-0 w-100 active" style="border-radius: 0">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset("DesignImages/bedroom.jpg")}}" name="Bed Room" class="btn p-0 w-100"
                                 style="border-radius: 0">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset("DesignImages/livingroom2.jpg")}}" name="Living Room 2"
                                 class="btn p-0 w-100" style="border-radius: 0">
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset("DesignImages/diningroom.jpg")}}" name="Dining Room" class="btn p-0 w-100"
                                 style="border-radius: 0">
                        </div>
                    </div>
                </div>
                <div>
                    <b>The space</b>
                    <div class="row">
                        <div class="col-md-6 p-3">
                            <p><i class="fa fa-fw fa-male"></i> Max people: 4</p>
                            <p><i class="fa fa-fw fa-bathtub"></i> Bathrooms:2</p>
                            <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 1</p>
                        </div>
                        <div class="col-md-6 p-3">
                            <p><i class="fa fa-fw fa-clock-o"></i> Check In: After 3PM</p>
                            <p><i class="fa fa-fw fa-clock-o"></i> Check Out: 12PM</p>
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <b>Amenities</b>
                    <div class="row">
                        <div class="col-md-6 p-3">
                            <p><i class="fa fa-fw fa-shower"></i> Shower</p>
                            <p><i class="fa fa-fw fa-wifi"></i> WIFI</p>
                            <p><i class="fa fa-fw fa-television"></i> TV</p>
                        </div>
                        <div class="col-md-6 p-3">
                            <p><i class="fa fa-fw fa-spoon"></i> Kitchen</p>
                            <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
                            <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
                        </div>
                    </div>
                </div>
                <hr/>
                <div>
                    <b>Extra Info</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus architecto eos explicabo
                        ipsum libero, maxime mollitia optio qui quos rerum tenetur ullam! Autem enim facilis inventore
                        itaque quaerat?</p>
                    <p>We accept: <i class="fa fa-credit-card"></i> <i class="fa fa-cc-visa"></i> <i
                            class="fa fa-cc-amex"></i> <i class="fa fa-cc-mastercard"></i></p>
                </div>
                <hr/>
                <div>
                    <b>Rules</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fugiat maxime mollitia
                        nostrum optio possimus quam unde ut vitae. Architecto blanditiis modi necessitatibus nihil odio
                        quibusdam quo sapiente ullam vero?</p>
                    <p>Subscribe to receive updates on available dates and special offers.</p>
                    <a href="#" class="btn btn-success" style="border-radius: 0;width: 30%">
                        Subscribe
                    </a>
                </div>
                <hr/>
                <div>
                    <h2>Contact</h2>
                    <div><i class="fa fa-fw fa-map-marker" style="text-align: left"></i> Chicago, US</div>
                    <div><i class="fa fa-fw fa-phone" style="text-align: left"></i> Phone: 0000000</div>
                    <div><i class="fa fa-fw fa-envelope" style="text-align: left"></i> Email: mail@mail.com</div>
                    <form class="mt-3 mb-3">
                        <label>Questions? Send to us:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" style="border-radius: 0">
                        <br/>
                        <input type="Email" class="form-control" placeholder="Enter Email" style="border-radius: 0">
                        <br/>
                        <textarea class="form-control" placeholder="Enter Message" style="border-radius: 0"></textarea>
                        <br/>
                        <button class="btn btn-success" style="border-radius: 0;width: 30%">Send a Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('div.row > div > img').click(function () {
                $('div.row > div > img').each(function () {
                    $(this).removeClass('active');
                });
                $(this).addClass('active');
                let name = $(this).attr('name');
                let source = $(this).attr('src');
                $('#MainImage').attr('src', source);
                $('#MainImageName').text(name);
            })
        })
    </script>
@endsection
