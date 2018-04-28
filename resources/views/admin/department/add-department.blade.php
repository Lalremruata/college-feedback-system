@extends('admin.layouts.app')
@section('title', 'add-department')
@section('body')
    <div id="input-form">
        <form id="form" class="" role="form" method="POST" action="{{ route('departments.store') }}">
            {{ csrf_field() }}
            <h3 class="text-center">Add Department</h3>
            <div class="form-group">
                <label class="">Department ID</label>
                <input type="text" class="form-control" name="departmentId" value="{{ old('departmentId') }}" data-parsley-maxlength="2"
                       required>
            </div>
            <div class="form-group">
                <label class="">Department Name</label>
                <input type="text" class="form-control" name="departmentName" value="{{ old('departmentName') }}" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
        </form>
    </div>
    @endsection