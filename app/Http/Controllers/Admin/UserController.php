<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Admin;
use App\Model\Admin\Role;
use Carbon\Carbon;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Admin::all();
        return view('admin.user.show',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,array(
            'name' => 'required',
            'email' => 'required|string|email|unique:admins',
            'password' => 'required|string|confirmed',
            'phone' => 'required|numeric|unique:admins',
            'status'=>'required',
        ));
        $request['password'] = bcrypt($request->password);
        $user = Admin::create($request->all());
        $user->roles()->sync($request->role);
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Admin::where('id',$id)->first();
        $roles = Role::all();
        return view('admin.user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => '',
            'email' => 'string|email',
            'password' => 'string|confirmed',
            'phone' => 'numeric',
        ));

        $user = Admin::find($id);
        $user['updated_at'] = Carbon::now();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->status = $request->status? $request['status']=1 : $request['status']=0;
        $user->save();
        $user->roles()->sync($request->role);
        return redirect(route('user.index'))->with('User updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Admin::where('id',$id)->delete();
        return redirect(route('user.index'))->with('message',"User deleted successfully");
    }
}
