<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Permission;
class PermissionController extends Controller
{
    public function index()
    {
    	$permissions = Permission::all();
    	return view('admin.permission.show',compact('permissions'));
    }

    public function create()
    {
    	return view('admin.permission.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(
            'name'=>'required|unique:permissions',
        ));

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->save();
        return redirect(route('permission.index'));
    }

    public function edit($id)
    {
    	$permission = Permission::where('id',$id)->first();
        return view('admin.permission.edit',compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name'=>'required',
        ));

        $permission = Permission::find($id);
        $permission->name = $request->name;
        // echo '<pre>';
        // print_r($permission);
        // exit;
        $permission->save();
        return redirect(route('permission.index'))->with('message','Permission updated');
    }

    public function destroy($id)
    {
    	Permission::where('id',$id)->delete();
        return redirect()->back()->with('message','Permission deleted');
    }
}
