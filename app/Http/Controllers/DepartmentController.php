<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = department::all();
        return view('admin.department.view-departments', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, array(
                'departmentId' => "required|max:10",
                'departmentName' => 'required'
            ));

            $department = new department;
            $department->departmentId = $request->departmentId;
            $department->departmentName = $request->departmentName;

            $department->save();

            Session::flash('success', 'Department Successfully added');
            return redirect()->route('departments.index');
        }
        catch (QueryException $e) {
            $dbCode = trim($e->getCode());
            //Codes specific to mysql errors
            switch ($dbCode)
            {
                case 23000:
                    $errorMessage = 'Duplicate entry | Department already exist ';
                    break;
                case 1062:
                    $errorMessage = 'Duplicate Entry ';
                    break;
                default:
                    $errorMessage = 'database invalid';
            }

            return redirect()->back()->with('message',"$errorMessage")->withInput(Input::all());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(department $department)
    {
        //return view('admin.add-department');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($department)
    {

        $departments = department::where('departmentId', $department)->first();

        return view('admin.department.edit-department', compact('departments'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $department)
    {
        //
    }
}
