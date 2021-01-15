<?php

namespace App\Http\Controllers;
use App\trainee;
use Illuminate\Http\Request;

class traineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = trainee::latest()->paginate(5);
        return view('admin.trainee.index',compact('trainees'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainee.create');
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
           // 'Category' => 'required',
            'Mobile_no' => 'required',
            ]);

        trainee::create($request->all());

        return redirect()->route('admin.trainee.index')
                        ->with('success','trainees created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(trainee $trainee)
    {
        return view('admin.trainee.show',compact('trainee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(trainee $trainee)
    {
        return view('admin.trainee.edit',compact('trainee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trainee $trainee)
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
            //'Category' => 'required',
            'Mobile_no' => 'required',
        ]);

        $trainee->update($request->all());

        return redirect()->route('admin.trainee.index')
                        ->with('success','trainee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(trainee $trainee)
    {
        $trainee->delete();

        return redirect()->route('admin.trainee.index')
                        ->with('success','trainee deleted successfully');
    }
}
