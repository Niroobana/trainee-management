<?php

namespace App\Http\Controllers;
use App\Course;
use App\TargetGroup;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CoursesstoreRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);

        return view('admin.courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $targets = TargetGroup::select('id','Target_group')->get();
        return view('admin.courses.create',compact('targets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursesstoreRequest $request)
    {
        $course = new Course();
        $course->setAttribute('course_name',$request->input('course_name'));
        $course->setAttribute('duration',$request->input('duration'));
        $course->setAttribute('course_type',$request->input('course_type'));
        $course->setAttribute('target_group',$request->input('target_group'));
        $course->setAttribute('description',$request->input('description'));
//        $request->validate([
//             'Course_name' => 'required',
//             'Duration' => 'required',
//             'Course_type' => 'required',
// //            'Target_group' => 'required',
//             //'Description'=> 'required',
//         ],
//         [
//             'Course_name.required' => 'Course_name is required',
//             'Duration.required' => 'Duration is required',
//             'Course_type.required' => 'Course_type is required',
// //            'Target_group.required' => 'Target_group is required',
//             'Description.required' => 'Description is required',
//         ]);


            $course->save();
        return redirect()->route('admin.courses.index')
                        ->with('success','course created successfully.');
//                        $data = $request->validated();
//                        Course::create($data);
//                        return redirect()->route('admin.courses.index')->with('success', 'Course has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CoursesstoreRequest $request, Course $course)
    {

        $course->setAttribute('course_name',$request->input('course_name'));
        $course->setAttribute('duration',$request->input('duration'));
        $course->setAttribute('course_type',$request->input('course_type'));
        $course->setAttribute('target_group',$request->input('target_group'));
        $course->setAttribute('description',$request->input('description'));
        // $request->validate([
        //     'Course_name' => 'required',
        //     'Duration' => 'required',
        //     'Course_type' => 'required',
        //     'Target_group' => 'required',
        //     'Description'=> 'required',
        // ]);


        $course->update($request->all());
        return redirect()->route('admin.courses.index')
                        ->with('success','course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course)
    {
        return view('admin.courses.delete', compact('course'));
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')
                        ->with('success','course deleted successfully');
    }
}
