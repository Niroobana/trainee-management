<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DepartmentstoreRequest;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::latest()->paginate(5);

        return view('admin.department.index',compact('departments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentstoreRequest $request)
    {
        $department = new Department();
        $department->setAttribute('department_name',$request->input('department_name'));
        $department->setAttribute('location',$request->input('location'));
        $department->setAttribute('description',$request->input('description'));

        $department->save();
        return redirect()->route('admin.department.index')
                        ->with('success','department created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('admin.department.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('admin.department.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentstoreRequest $request, Department $department)
    {
    
        $department->setAttribute('department',$request->input('department'));
        $department->setAttribute('location',$request->input('location'));
        $department->setAttribute('description',$request->input('description'));

        $department->update($request->all());
        return redirect()->route('admin.department.index')
                        ->with('success','department created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Department $department)
    {
        return view('admin.department.delete', compact('department'));
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('admin.department.index')
                        ->with('success','department deleted successfully');
    }
}


