@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<!--
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
-->
            </div>
            <div class="container">
                    <div class="destination-container">
                        <div class="destination" id="musango">
                            <a href="{{ route('musango') }}"><h2>Musango</h2></a>
                        </div>

                        <div class="destination" id="mondial">
                            <a href="{{ route('mondial') }}"><h2>Mondial</h2></a>
                        </div>

                        <div class="destination" id="diamond">
                            <a href="{{ route('diamond') }}"><h2>Diamond</h2></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

