<?php

namespace App\Http\Controllers;
use App\TrainingProgram;
use Illuminate\Http\Request;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training_programs = TrainingProgram::latest()->paginate(5);

        return view('admin.training_programs.index',compact('training_programs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.training_programs.create');
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
            'Program_name' => 'required',
            'Date' => 'required',
            'Location' => 'required',
            //'Program_type' => 'required',
            'Duration' => 'required',
            'Content' => 'required',
            'Target_group' => 'required',
            'No_of_trainees' => 'required',
            'No_of_resources' => 'required',
            'No_of_staffs' => 'required',
            ]);

        TrainingProgram::create($request->all());

        return redirect()->route('admin.training_programs.index')
                        ->with('success','TrainingProgram created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingProgram $training_program)
    {
        return view('admin.training_programs.show',compact('training_program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingProgram $training_program)
    {
        return view('admin.training_programs.edit',compact('training_program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingProgram $training_program)
    {
        $request->validate([
            'Program_name' => 'required',
            'Date' => 'required',
            'Location' => 'required',
            //'Program_type' => 'required',
            'Duration' => 'required',
            'Content' => 'required',
            'Target_group' => 'required',
            'No_of_trainees' => 'required',
            'No_of_resources' => 'required',
            'No_of_staffs' => 'required',
        ]);

        $training_program->update($request->all());

        return redirect()->route('admin.training_programs.index')
                        ->with('success','TrainingProgram updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingProgram $training_program)
    {
        $training_program->delete();

        return redirect()->route('admin.training_programs.index')
                        ->with('success','TrainingProgram deleted successfully');
    }
}
