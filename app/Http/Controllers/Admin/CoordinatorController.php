<?php

namespace App\Http\Controllers;
use App\Coordinator;
use Illuminate\Http\Request;

class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinators = coordinator::latest()->paginate(5);
        return view('admin.coordinator.index',compact('coordinators'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coordinator.create');
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
            'name' => 'required',
            'detail' => 'required',
            ]);

            coordinator::create($request->all());

        return redirect()->route('admin.coordinator.index')
                        ->with('success','Coordinator created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinator $coordinators)
    {
        return view('admin.coordinator.show',compact('coordinators'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinator $coordinators)
    {
        return view('admin.coordinator.edit',compact('coordinators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordinator $coordinators)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $coordinators->update($request->all());

        return redirect()->route('admin.coordinator.index')
                        ->with('success','Coordinator updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinator $coordinators)
    {
        $coordinators->delete();

        return redirect()->route('admin.coordinator.index')
                        ->with('success','Coordinator deleted successfully');
    }
}
