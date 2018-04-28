<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('authenticated');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function addFaculty()
    {
        return view('admin.add-faculty');
    }

    public function addDepartment()
    {
        return view('admin.department.add-department');
    }

    public function addStudent()
    {
        return view('admin.add-student');
    }

    public function addCourse()
    {
        return view('admin.add-course');
    }

    public function addAdmin()
    {
        return view('admin.add-admin');
    }

}
