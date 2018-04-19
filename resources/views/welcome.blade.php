@extends('layouts.template')
@section('title', 'Feedback System | Home')
@section('navbar')
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header" style="padding: 7px;">
                <a class="navbar-brand" href="#" id="navbar-logo" style="margin: auto !important;">Feedback System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="btn btn-lg btn-success" style="margin:auto 15px"><a href="{{ route('login') }}">
                            <span class="w3-text-white glyphicon glyphicon-user align-content-center"></span><strong>&nbsp;Admin Login</strong>
                        </a></li>
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
                        <div class="w3-animate-top w3-black text-center" id="txt" style="height: 163px; width: 163px; font-size: 27px; padding: 55px 0px 0 0px; border-radius: 50%; margin: 0 auto; border:8px solid #5a738e"></div>
                        <div class=" w3-animate-top w3-round-large w3-center " style="font-size: 27px;" id="date"></div>
                        <div style="border-bottom: 1px dotted black; max-width: 330px;margin: 0 auto;"> </div>
                    </div>
                </div>
            </div>

            <div class="student-login" style="margin: 0 auto; max-width: 330px; padding: 15px;">
                    <form>
                        <h3 class="text-center">Student Login</h3>
                        <div class="mui-form-group">
                            <input type="text" class="mui-form-control">
                            <label class="mui-form-floating-label">Token</label>
                            <span class="bar"></span>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
            </div>
        </div>
    @endsection
