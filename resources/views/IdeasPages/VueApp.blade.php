@extends('Layouts.MainLayout')

@section('title')
    Vue App
@endsection

@section('head')

    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>

@endsection

@section('content')
    @include('Layouts.MainNavbar')

    <div id="app">
            <h3>{{$datapassed}}</h3>
        <buygame dataList="{{}}">

        </buygame>
        <!--<div class="container-fluid p-3">
            <h2>Buy A Game</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="BuyerId">Buyer Identity</label>
                        <input type="text" class="form-control" id="BuyerId" name="BuyerId" placeholder="Enter Buyer Id" required>
                    </div>
                    <div class="card">
                        <div class="card-header text-light bg-secondary" id="RecieptCardHeader">
                            <h5 class="card-title">Receipt</h5>
                        </div>
                        <div class="card-body" style="padding: 1%">
                            <table class="table table-hover" style="margin: 0">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Game Name</th>
                                    <th scope="col"></th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Remove</th>
                                </tr>
                                </thead>
                                <tbody id="TableBody"></tbody>
                                <tfoot>
                                <tr class="table-info">
                                    <th scope="col">Total</th>
                                    <th scope="col" id="ItemsTotalNumber">0</th>
                                    <th scope="col" id="ItemsTotalPrice">0$</th>
                                    <td><a href="#" class="text-danger" id="ClearButton">Clear</a></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-block btn-primary" value="CheckOut">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">



                                        <p v-if="arraydata">No games available</p>

                    <div v-else class="card-columns">

                        <div v-for="data in datas" class="card">
                            <div class="card-header">
                                <h5 class="card-title">@Html.DisplayFor(modelItem => item.Name)</h5>
                                <h6 class="card-subtitle mb-2 text-muted">@Html.DisplayFor(modelItem =>
                                    item.Genre.Name)</h6>
                            </div>
                            <div class="card-body" style="padding: 1%">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Price:
                                        <span>@Html.DisplayFor(modelItem => item.Price)</span>$
                                    </li>
                                    <li class="list-group-item">

                                        <label v-if="noagedata">Not specified</label>

                                        <label v-else> there is data</label>

                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success btn-block" id="@item.Id">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
@endsection
@section('script')
    <script>

        $(document).ready(function () {
            $('#IdeasHomePage').addClass('active');
            $('#VueAppPage').addClass('active');
        });

        /*


                    $(".btn-success").click(function () {
                        $(this).parent().parent().addClass("border-success");
                        $(this).prop("disabled", true);
                        let itemId = $(this).attr("id");
                        let itemName = $(this).parent().parent().find(".card-title").text();
                        let itemPrice = $(this).parent().parent().find("span").text();
                        $("#TableBody").append('<tr id="' + itemId + '">' +
                            '<td>' + itemName + '</td>' +
                            '<td></td>' +
                            '<td><span>' + itemPrice + '</span>$</td>' +
                            '<td id="removeItem"><a href="#" class="text-danger removeItem">x</a></td>' +
                            '<input type="hidden" name="Item_' + itemId + '" value="' + itemId + '">' +
                            '</tr>');

                        calculatingItems();
                        assignRemovingFunction();

                    });

                    $("#ClearButton").click(function() {
                        $("#TableBody").children().each(function () {

                            $(this).find(".removeItem").trigger("click");
                        });

                        calculatingItems();
                    });

                @{
                    var itemsListArray = ViewData["itemsListArray"] as string[];
                    if (itemsListArray != null)
                    {
                        foreach (var item in itemsListArray)
                        {
                        <p>
                        $("#@item").trigger("click");
                        </text>
                        }
                    }
                }

                    function calculatingItems() {
                        $("#ItemsTotalNumber").text($("#TableBody").children("tr").length);
                        let count = 0;
                        $("#TableBody").children("tr").each(function () {
                            let converting = $(this).find("span").text();
                            count = count + parseFloat(converting);
                        });
                        if (count > 0) {
                            $("#RecieptCardHeader").removeClass("bg-secondary");
                            $("#RecieptCardHeader").addClass("bg-success");
                        } else {
                            $("#RecieptCardHeader").removeClass("bg-success");
                            $("#RecieptCardHeader").addClass("bg-secondary");
                        }
                        $("#ItemsTotalPrice").text(count + "$");
                    }

                    function assignRemovingFunction() {

                        $(".removeItem").click(function () {
                            $(this).parent().parent().remove();
                            calculatingItems();
                            let itemId = $(this).parent().parent().attr("id");
                            $(`#${itemId}`).parent().parent().removeClass("border-success");
                            $(`#${itemId}`).prop("disabled", false);
                        });
                    }
                });
                */
    </script>
@endsection
