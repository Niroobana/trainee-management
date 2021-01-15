<?php

namespace App\Http\Controllers;
use App\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = gallery::latest()->paginate(5);
        return view('gallery.index',compact('galleries'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
            'Image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
            [
                'Program_name.required' => 'Course_name is required',
                'Date.required' => 'Duration is required',
                'Image.required' => 'Image is required',

            ]);
            $ImageName = time().'.'.$request->Image->extension();

            $request->image->move(public_path('gallery'), $ImageName);

            return back()
            ->with('success','You have successfully upload image.')
            ->with('Image',$ImageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        return view('gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $request->validate([
            'Course_name' => 'required',
            'Duration' => 'required',
            'Course_type' => 'required',
            'Target_group' => 'required',
            'Description'=> 'required',
        ]);


        $gallery->update($request->all());

        return redirect()->route('gallery.index')
                        ->with('success','gallery updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('gallery.index')
                        ->with('success','gallery deleted successfully');
    }
}
