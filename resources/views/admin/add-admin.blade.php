@extends('admin.layouts.app')
@section('title', 'add-admin')
@section('body')
    <div id="input-form">
        <form id="login-form" class="" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h3 class="text-center">Add Admin</h3>
            <div class="form-group">
                <label class="">Admin Name</label>
                <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" required>
            </div>
            <div class="form-group">
                <label class="">Admin Id</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label class="">Admin Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
        </form>
    </div>
@endsection