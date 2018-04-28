@extends('admin.layouts.app')
@section('title', 'Edit Department | '.$departments->departmentName )
@section('body')
    {{ $departments->departmentName }}
@endsection