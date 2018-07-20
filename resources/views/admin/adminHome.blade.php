@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="container">
                <div class="destination-container">
                    <div class="row">
                        <a href="{{ url('/agencies/create') }}" class="btn btn-success">Add Agency</a>
                        <a href="{{ url('/manage-agancies') }}" class="btn btn-default">All Agencies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection