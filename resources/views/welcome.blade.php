@extends('layouts.app')
@section('navbar')
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                </button>
                <a class="navbar-brand" href="#" style="margin: auto;">Feedback System</a>
            </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" >
                        Admin Login
                  </a>
                  </li>
              </ul>
        </div>
    </nav>
    @endsection

    @section('body')
    <!-- Body -->
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="w3-animate-top w3-black w3-center" id="txt" style="height: 160px; width: 160px; font-size: 27px; padding: 55px 0px 0 0; border-radius: 50%; margin: 0 auto; border:8px solid #5a738e"></div>
                        <div class=" w3-animate-top w3-round-large w3-center  " style="font-size: 27px;" id="date"></div>
                        <div style="border-bottom: 1px dotted black"> </div>
                    </div>
                    <div class="col-lg-4"></div>
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
