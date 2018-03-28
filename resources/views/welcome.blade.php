@extends('layouts.app')
@section('navbar')
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Feedback system</a>
            </div>
        </div>
    </nav>
    @endsection

    @section('body')
    <!-- Body -->
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <h1>Welcome to feedback system</h1>
                    <div class="col-lg-4">
                        <div class="w3-card w3-black w3-animate-top w3-round-large w3-center" id="txt"></div>
                        <div class="w3-card-4 w3-blue-gray w3-animate-top w3-round-large w3-center" id="date"></div>
                    </div>
                    <div class="col-lg-6">
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-lg btn-success" href="{{ URL::route('login') }}" role="button">Admin Login</a></p>
                    </div>
                </div>
            </div>

            <div class="student-login">
                <div class="col-lg-4 pull-right col-lg-pull-4">
                    <form class="form-signin">
                        <h2 class="form-signin-heading">Student sign in</h2>
                        <input type="text" id="token" class="form-control" placeholder="token" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection