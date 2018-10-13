@extends('Layouts.MainLayout')

@section('title')
    API Functions
@endsection

@section('head')

@endsection

@section('content')

    @include('Layouts.MainNavbar')
    <br/>
    <div class="container-fluid" id="StatusMessage">
        @include('Layouts.AlertMessages')
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['url' => 'api/DatabaseFunctionalityAPI' , 'method' => 'get', 'class' => 'form-group form-inline' ]) !!}
                <input class="form-control" name="SearchTextBox" type="text" placeholder="Search user Identity"
                       required>
                &nbsp;
                <button class="btn btn-outline-success" type="submit">Search</button>
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-outline-success float-right" data-toggle="modal"
                        data-target="#AddDataModal">
                    Add more ideas
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <table class="table table-hover table-responsive-md">
            <caption>List of Ideas To implement</caption>
            <thead class="bg-info">
            <tr>
                <th scope="col" style="width: 2%">#</th>
                <th scope="col" style="width: 8%">User Identity</th>
                <th scope="col" style="width: 11%;">Title</th>
                <th scope="col" style="overflow: auto">Details</th>
                <th scope="col" style="width: 13%">Date Created</th>
                <th scope="col" style="width: 13%">Last Updated</th>
                <th scope="col" class="text-center" style="width: 13%">Options</th>
            </tr>
            </thead>
            <tbody id="JSONData">

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="AddDataModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-success">
                    <h4 class="modal-title">Add New Idea</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                {!! Form::open(['url' => 'api/DatabaseFunctionalityAPI', 'method' => 'post', 'id' => 'AddIdeasForm']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="UserIdentityTextBox">Enter an Identity</label>
                        <input type="text" name="UserIdentity" class="form-control" id="UserIdentityTextBox"
                               placeholder="Identity">
                    </div>
                    <div class="form-group">
                        <label for="TitleTextBox">Title</label>
                        <input type="text" name="Title" class="form-control" id="TitleTextBox"
                               placeholder="Enter A Title" required>
                    </div>
                    <div class="form-group">
                        <label for="DetailsTextBox">Details</label>
                        <textarea name="Details" class="form-control" id="DetailsTextBox"
                                  placeholder="Enter Descriptions"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary">
                    <input type="reset" class="btn btn-warning" value="Clear">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="CancelModalButtonForAdd">
                        Cancel
                    </button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <div class="modal fade" id="UpdateDataModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title" id="TheModalTitle">Update Data</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                {!! Form::open(['url' => '/', 'method' => 'put', 'id' => 'UpdateIdeasForm']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="UpdateUserIdentityTextBox">Identity</label>
                        <input type="text" name="UserIdentity" class="form-control" id="UpdateUserIdentityTextBox"
                               placeholder="Identity">
                    </div>
                    <div class="form-group">
                        <label for="UpdateTitleTextBox">Title</label>
                        <input type="text" name="Title" class="form-control" id="UpdateTitleTextBox"
                               placeholder="Enter A Title" required>
                    </div>
                    <div class="form-group">
                        <label for="UpdateDetailsTextBox">Details</label>
                        <textarea name="Details" class="form-control" id="UpdateDetailsTextBox"
                                  placeholder="Enter Descriptions"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <input type="reset" class="btn btn-warning" value="Clear">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                            id="CancelModalButtonForUpdate">
                        cancel
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#DatabasePage').addClass('active');
            $('#FunctionalityHomePage').addClass('active');
            GetDataAjax();

            //Add data API
            $('#AddIdeasForm').submit(function (event) {
                let url = $(this).attr('action');
                // Stop form from submitting normally
                event.preventDefault();
                // Serialize the form data.
                let formData = $(this).serialize();
                // Submit the form using AJAX.
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    success: function (JSONData) {
                        $('#CancelModalButtonForAdd').click();
                        StatusMessage(true, 'Data Has Been Added');
                        GetDataAjax();
                    },
                    fail: function (xhr, textStatus, errorThrown) {
                        StatusMessage(false, 'request failed');
                    }
                });
            });

            //status message
            function StatusMessage($passed, $message) {
                if ($passed === true) {
                    $('#StatusMessage').append('<div class="alert alert-success" role="alert">' + $message + '</div>');
                } else {
                    $('#StatusMessage').append('<div class="alert alert-danger" role="alert">' + $message + '</div>');
                }
            }

            //Update data API
            $('#UpdateIdeasForm').submit(function (event) {
                let url = $(this).attr('action');
                // Stop form from submitting normally
                event.preventDefault();
                // Serialize the form data.
                let formData = $(this).serialize();
                // Submit the form using AJAX.
                $.ajax({
                    type: 'PUT',
                    url: url,
                    data: formData,
                    success: function (JSONData) {
                        $('#CancelModalButtonForUpdate').click();
                        StatusMessage(true, 'Data Has Been Updated');
                        GetDataAjax();
                    },
                    fail: function (xhr, textStatus, errorThrown) {
                        StatusMessage(false, 'request failed');
                    }
                });
            });

            //json get data
            function GetDataAjax() {
                let url = "http://127.0.0.1:8000/api/DatabaseFunctionalityAPI";
                $.ajax({
                    url: url,
                    type: "GET",
                    data: "jsonp",
                    success: function (JSONData) {
                        $myarray = JSONData.data;
                        if ($myarray.length === 0) {
                            $('#JSONData').html(
                                '<tr>\n' +
                                '<td colspan="7" class="text-center">No Data</td>\n' +
                                '</tr>'
                            );
                        }
                        else {
                            $('#JSONData').empty();
                            let counting = 0;
                            for ($i = 0; $i < $myarray.length; $i++) {
                                counting = $i + 1;
                                let JSONDataConfirmationMessage = 'Are you sure you want to delete this item ' + $myarray[$i].Title + ' ?';
                                $('#JSONData').append(
                                    '<tr id="' + $myarray[$i].id + '">' +
                                    '   <td scope="col">' + counting + '</td>' +
                                    '   <td scope="col" id="DefineUserIdentity">' + $myarray[$i].UserIdentity + '</td>' +
                                    '   <td scope="col" id="DefineTitle">' + $myarray[$i].Title + '</td>' +
                                    '   <td scope="col" style="overflow: auto" id="DefineDetails">' + $myarray[$i].Details + '</td>' +
                                    '   <td scope="col">' + $myarray[$i].DateAdded + '</td>' +
                                    '   <td scope="col">' + $myarray[$i].LastUpdate + '</td>' +
                                    '   <td scope="col" class="text-center form-inline">' +
                                    '       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#UpdateDataModal">Update</button>' +
                                    '       &nbsp; &nbsp;' +
                                    '       <button type="button" class="btn btn-danger myclass">delete</button>' +
                                    '   </td>' +
                                    '</tr>'
                                );
                            }
                        }
                        $('.myclass').click(function () {
                            let item = $(this).parent().parent();
                            let url = "http://127.0.0.1:8000/api/DatabaseFunctionalityAPI/" + item.attr('id');
                            if (confirm('Are you sure you want to delete this item ' + item.find('#DefineTitle').text() + '?') === true) {
                                $.ajax({
                                    url: url,
                                    type: "DELETE",
                                    data: "jsonp",
                                    success: function (JSONData) {
                                        StatusMessage(true, 'Data Has Been Deleted');
                                        GetDataAjax();
                                    },
                                    fail: function (xhr, textStatus, errorThrown) {
                                        StatusMessage(false, 'request failed to Delete data');
                                    }
                                })
                            }
                        });
                    },
                    fail: function (xhr, textStatus, errorThrown) {
                        StatusMessage(false, 'request failed to get data');
                    }
                });
            }

            //page logic
            $('td').addClass('align-middle');
            $('#CancelModalButtonForAdd').click(function () {
                $("#AddIdeasForm")[0].reset();
            });

            $('#CancelModalButtonForUpdate').click(function () {
                $("#UpdateIdeasForm")[0].reset();
            });

            $('#UpdateDataModal').on('shown.bs.modal', function (event) {
                /*let triggerElement = $(event.relatedTarget); // Button that triggered the modal
                triggerElement.find("").html();*/

                let triggerElement = $(event.relatedTarget.parentNode.parentNode);

                let DataId = triggerElement.attr('id');
                let DataUserIdentity = triggerElement.children('#DefineUserIdentity').html();
                let DataTitle = triggerElement.children('#DefineTitle').html();
                let DataDetails = triggerElement.children('#DefineDetails').html();

                $("#TheModalTitle").html("Data to be Updated for " + DataTitle);
                $("#UpdateIdeasForm").attr('action', 'api/DatabaseFunctionalityAPI/' + DataId);
                $("#UpdateUserIdentityTextBox").val(DataUserIdentity);
                $("#UpdateTitleTextBox").val(DataTitle);
                $("#UpdateDetailsTextBox").text(DataDetails);
            });
        });
    </script>
@endsection
