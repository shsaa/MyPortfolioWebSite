@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ADMIN Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! as ADMIN with role <strong>{{$role}}</strong>

                        <p class="text-primary">
                            @include('auth.who')
                        </p>

                        @can('SuperAdminOnly', auth()->user())
                            <button class="btn btn-primary">here is a button</button>
                        @endcan
                        @can('AdminOnly', auth()->user())
                            <button class="btn btn-warning">here is a button 2</button>
                        @endcan
                            <button class="btn btn-danger">here is for both</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        alert({{Auth::user()}})
    </script>
@endsection


