<?php

namespace App\Http\Controllers;
use App\resource;
use Illuminate\Http\Request;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = resource::latest()->paginate(5);

        return view('admin.resource.index',compact('resources'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            //'Gender' => 'required',
            'NIC' => 'required',
            'Email' => 'required',
            'Designation' => 'required',
            'Address' => 'required',
            'Department' => 'required',
             'Mobile_no' => 'required',
             'Grade'=> 'required',
            ]);

            resource::create($request->all());

        return redirect()->route('admin.resource.index')
                        ->with('success','resource created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(resource $resource)
    {
        return view('admin.resource.show',compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(resource $resource)
    {
        return view('admin.resource.edit',compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resource $resource)
    {
        $request->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            //'Gender' => 'required',
            'NIC' => 'required',
            'Email' => 'required',
            'Designation' => 'required',
            'Address' => 'required',
            'Department' => 'required',
             'Mobile_no' => 'required',
             'Grade' => 'required',
             'Experience' => 'required',
        ]);

        $resource->update($request->all());

        return redirect()->route('admin.resource.index')
                        ->with('success','resource updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(resource $resource)
    {
        $resource->delete();

        return redirect()->route('admin.resource.index')
                        ->with('success','resource deleted successfully');
    }
}
