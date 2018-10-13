@extends('Layouts.MainLayout')

@section('title')
    DataBase Functions
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
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['url' => '/DatabaseFunctionality' , 'method' => 'get', 'class' => 'form-group form-inline' ]) !!}
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
            <tbody>
            @if(count($IdeasData)>0)
                <?php $counting = 0; ?>
                @foreach($IdeasData as $IdeasDatas)
                    <?php $counting++; ?>
                    <tr id="{{$IdeasDatas->id}}">
                        <td scope="col">{{$counting}}</td>
                        <td scope="col" id="DefineUserIdentity">{{$IdeasDatas->UserIdentity}}</td>
                        <td scope="col" id="DefineTitle">{{$IdeasDatas->Title}}</td>
                        <td scope="col" style="overflow: auto" id="DefineDetails">{{$IdeasDatas->Details}}</td>
                        <td scope="col">{{$IdeasDatas->DateAdded}}</td>
                        <td scope="col">{{$IdeasDatas->LastUpdate}}</td>
                        <td scope="col" class="text-center form-inline">
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#UpdateDataModal">Update
                            </button>
                            &nbsp; &nbsp;
                            {!! Form::open(['url' => '/DeleteIdea/' . $IdeasDatas->id, 'method' => 'delete']) !!}
                            <input type="submit" class="btn btn-danger" value="delete"
                                   onclick="return confirm('Are you sure you want to delete this item {{$IdeasDatas->Title}}?');">
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center">No Data</td>
                </tr>
            @endif
            </tbody>
        </table>
        {!! Form::open(['url' => '/APIUsagePage' , 'method' => 'get', 'class' => 'form-group form-inline float-right' ]) !!}
        <button type="submit" class="btn btn-outline-primary">
            API Usage Page
        </button>
        {!! Form::close() !!}
    </div>

    <div class="modal fade" id="AddDataModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-success">
                    <h4 class="modal-title">Add New Idea</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                {!! Form::open(['url' => '/AddIdeasToImplement', 'method' => 'post', 'id' => 'AddIdeasForm']) !!}
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
                $("#UpdateIdeasForm").attr('action', '/UpdateIdea/' + DataId);
                $("#UpdateUserIdentityTextBox").val(DataUserIdentity);
                $("#UpdateTitleTextBox").val(DataTitle);
                $("#UpdateDetailsTextBox").text(DataDetails);
            });
        });
    </script>
@endsection
