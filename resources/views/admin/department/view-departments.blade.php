@extends('admin.layouts.app')
@section('body')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table id="table" class="table table-striped table-bordered table-responsive-lg">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Department ID</th>
                    <th scope="col">Department Name</th>
                    <th scope="col" colspan="4"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $department->departmentId }}</td>
                        <td>{{ $department->departmentName }}</td>
                        <td><a href="{{ route('departments.show', $department->departmentId) }}" class="btn btn-default btn-sm">View</a>
                            <a href="{{ route('departments.edit', $department->departmentId) }}"
                               class="btn btn-default btn-sm">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection