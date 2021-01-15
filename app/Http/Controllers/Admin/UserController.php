<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\role;
use Illuminate\Http\Admin\UserstoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = user::with('roleby')->orderBy('id', 'desc')->paginate(12);
        return view('admin.users.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( UserstoreRequest $request)
    {
        $data=$request->validated();
        // $data= $request::where('name', $data['role'] )->value('id');
        $role_id = DB::table('roles')->where('name',$data['role'] )->value('id');
        user::create([
            'Name' => $data['Name'],
            'Role_id' =>$role_id,
            'Email' => $data['Email'],
            'Password' => Hash::make($data['Password']),
        ]);
        return redirect()->route('admin.users.index')->with('success', 'User has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->load('createdBy');
        return view('admin.users.show', compact('user'));
    }
}
