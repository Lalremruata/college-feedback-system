@extends('layouts.app')
@section('body')
    <div class="container">

        <form class="form-signin">
            <a href="{!! url('/dashboard'); !!}">
                <button class="btn btn-large btn-success"><span class="fa fa-arrow-left"></span> Back Home</button>
            </a>
            <h3 class="text-center">Please Login</h3>
            <div class="mui-form-group">
                <input type="text" class="mui-form-control">
                <label class="mui-form-floating-label">Admin id</label>
                <span class="bar"></span>
            </div>
            <div class="mui-form-group">
                <input type="password" class="mui-form-control">
                <label class="mui-form-floating-label">Password</label>
                <span class="bar"></span>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div> <!-- /container -->
@endsection