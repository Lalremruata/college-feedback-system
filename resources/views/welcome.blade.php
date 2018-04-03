@extends('layouts.app')
@section('navbar')
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header" style="padding: 7px;">
                <a class="navbar-brand" href="#" style="margin: auto !important;">Feedback System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="btn btn-lg btn-success" style="margin:auto 15px"><a href="{{ route('login') }}" class="w3-text-black">Admin Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @endsection

    @section('body')
    <!-- Body -->
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                        <div class="w3-animate-top w3-black" id="txt" style="height: 160px; width: 160px; font-size: 27px; padding: 55px 0px 0 0; border-radius: 50%; margin: 0 auto; border:8px solid #5a738e"></div>
                        <div class=" w3-animate-top w3-round-large w3-center  " style="font-size: 27px;" id="date"></div>
                        <div style="border-bottom: 1px dotted black; max-width: 330px;margin: 0 auto;"> </div>
                    </div>
                </div>
            </div>

            <div class="student-login">
                    <form class="" style="margin: 0 auto; max-width: 330px; padding: 15px;">
                        <h2 class="form-signin-heading">Student sign in</h2>
                        <input type="text" id="token" class="form-control" placeholder="token" required autofocus style="border: 0;outline: 0;
                        background: transparent;border-bottom: 1px solid lightblue; margin-bottom: 15px;">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
            </div>
        </div>
    @endsection
