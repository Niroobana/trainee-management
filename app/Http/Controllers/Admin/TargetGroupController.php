<?php

namespace App\Http\Controllers;
use App\TargetGroup;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TargetgroupstoreRequest;

class TargetGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target_groups = TargetGroup::latest()->paginate(5);

        return view('admin.target_group.index',compact('target_groups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.target_group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(TargetgroupstoreRequest $request)
    {
        $course = new Targetgroup();
        $course->setAttribute('target_group',$request->input('target_group'));
        $course->setAttribute('description',$request->input('description'));

        $course->save();
        return redirect()->route('admin.target_group.index')
                        ->with('success','target_group created successfully.');

        // $request->validate([
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ],
        //     [
        //   'Target_group.required' => 'Target_group is required',
        //         'Description.required' => 'Description is required',
        //     ]);


        // TargetGroup::create($request->all());

        // return redirect()->route('admin.target_group.index')
        //     ->with('success','targetGroup created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TargetGroup $target_group)
    {
        return view('admin.target_group.show',compact('target_group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TargetGroup $target_group)
    {
        return view('admin.target_group.edit',compact('target_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TargetgroupstoreRequest $request, TargetGroup $target_group)
    {
        // $request->validate([
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ]);
        //     $target_group->update($request->all());

        $target_group->setAttribute('target_group',$request->input('target_group'));
        $target_group->setAttribute('description',$request->input('description'));

        $target_group->update($request->all());
        return redirect()->route('admin.target_group.index')
                        ->with('success','target_group created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(TargetGroup $target_group)
    {
        return view('admin.target_group.delete', compact('target_group'));
    }

    public function destroy(TargetGroup $target_group)
    {
        $target_group->delete();

        return redirect()->route('admin.target_group.index')
                        ->with('success','target_group deleted successfully');
    }
}


