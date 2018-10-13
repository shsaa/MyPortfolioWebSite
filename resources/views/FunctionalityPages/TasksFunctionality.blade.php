@extends('Layouts.MainLayout')

@section('title')
    Tasks Functions
@endsection

@section('head')

@endsection

@section('content')

    @include('Layouts.MainNavbar')
    <br/>

    <div class="container-fluid">
        @include('Layouts.AlertMessages')
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-secondary text-light">
                <h3>Upload a picture</h3>
            </div>
            <div class="card-body row">
                {!! Form::open(['url' => '/UploadImage' , 'method' => 'post', 'class' => 'form-group col-md-6', 'files' => true ]) !!}
                <label>Upload a picture:</label>
                <br/>
                {{form::file("image")}}
                <br/>
                <br/>
                <button class="btn btn-info" type="submit">Upload Image</button>
                {!! Form::close() !!}
                <div class="col-md-6">
                    <label>Preview:</label>
                    <br/>
                    <?php if (!isset($image)) {
                        $image = '';
                        $imagetype = '';
                    } ?>
                    <img class="rounded" src="data:image/{{$imagetype}};base64, {{$image}}" alt="Image preview"
                         style="max-width: 50%; height: 300px">
                </div>
            </div>
            <div class="card-footer">
                <p>provides functionality to upload a picture and convert it to text. Then read it as a text.</p>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="card-header bg-secondary text-light">
                <h3>Filter results</h3>
            </div>
            <div class="card-body">
                <h2>Filterable Table</h2>
                <p>Search the table for anything:</p>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@mail.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@greatstuff.com</td>
                    </tr>
                    <tr>
                        <td>Anja</td>
                        <td>Ravendale</td>
                        <td>a_r@test.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <p>Filter results dynamically without leaving the page -good for few results-. not datatable</p>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="card-header bg-secondary text-light">
                <h3>JSON Example - weather</h3>
            </div>
            <div class="card-body">
                <h4>City Name</h4>
                <div class="row">
                    <div class="form-group col-md-4">
                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter City Name">
                        <br/>
                        <button id="SearchWeather" class="btn btn-primary form-control">Search City</button>
                    </div>
                    <div class="col-md-8">
                        <div id="JSONData">
                            No search yet
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p>Demonstrate the use of JSON -OpenWeather as example- and also the use of HTML entities</p>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header bg-secondary text-light">
                <h3>Ajax Example</h3>
            </div>
            <div class="card-body">
                <h4>Data to pass with ajax</h4>
                <div class="row">
                    <div class="form-group col-md-4">
                        <input type="text" id="AJAXEntry" name="city" class="form-control" placeholder="Enter Data">
                        <br/>
                        <button id="AJAXButton" class="btn btn-warning form-control">Click To request</button>
                    </div>
                    <div class="col-md-8">
                        <div id="AJAXData">
                            No Result yet
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p>Using Ajax with php to update the page partially without reloading</p>
            </div>
        </div>

        <br>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#TasksPage').addClass('active');
            $('#FunctionalityHomePage').addClass('active');

            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            $('#SearchWeather').click(function () {
                let CityName = $('#city').val();

                if (CityName === '') {
                    $('#JSONData').html('<div class="alert alert-danger" role="alert">City Name is empty</div>')
                }
                else {
                    let url = "http://api.openweathermap.org/data/2.5/weather?q=" + CityName + "&units=metric&appid=ee7a25f89ac75e3cc259e87c59a60057";
                    $.ajax({
                        url: url,
                        type: "GET",
                        data: "jsonp",
                        success: function (JSONData) {
                            $('#JSONData').html(
                                '<h5 class="text-success">City Name: &nbsp;</h5><p class="text-info"> ' + JSONData.name + "," + JSONData.sys.country + '</p>' +
                                '<h5 class="text-success">City ID: &nbsp;</h5><p class="text-info"> ' + JSONData.id + '</p>' +
                                '<h5 class="text-success">Weather Main: &nbsp;</h5><p class="text-info"> ' + JSONData.weather[0].main + '<img src="http://openweathermap.org/img/w/' + JSONData.weather[0].icon + '.png"></p>' +
                                '<h5 class="text-success">Weather Description: &nbsp;</h5><p class="text-info"> ' + JSONData.weather[0].description + '</p>' +
                                '<h5 class="text-success">Temperature: &nbsp;</h5><p class="text-info"> ' + JSONData.main.temp + '&#8451;</p>'
                            );
                        }
                    });
                }
            });

            $('#AJAXButton').click(function () {
                $.ajax({
                    type: "GET",
                    url: '/AjaxRequest',
                    data: {name: $('#AJAXEntry').val()},
                    success: function (data) {
                        $('#AJAXData').html(data);
                    }
                });
            });
        });
    </script>
@endsection
