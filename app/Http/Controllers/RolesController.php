<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Auth;

use Illuminate\Http\Request;

class RolesController extends Controller
{

    public $user;
    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::guard('web')->user();
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (is_null($this->user)|| !$this->user->can('roles.index')){
           abort(403, 'Unauthorized Access');
        }

        $roles = Role::all();
        return view('admin.pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user)|| !$this->user->can('roles.create')){
           abort(403, 'Unauthorized Access');
        }

        $all_permissions  = Permission::all();
        $permission_groups = User::getpermissionGroups();
        // dd($permission_groups);
        return view('admin.pages.roles.create',compact('all_permissions','permission_groups'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        // Process Data
        $role = Role::create(['name' => $request->name]);

        // $role = DB::table('roles')->where('name', $request->name)->first();
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return redirect()->route('roles.index');
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
         if (is_null($this->user)|| !$this->user->can('roles.edit')){
           abort(403, 'Unauthorized Access');
        }

        $role = Role::findById($id);
        $all_permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('admin.pages.roles.edit', compact('role', 'all_permissions', 'permission_groups'));
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
        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' . $id
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        $role = Role::findById($id);
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->name =$request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been updated !!');
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if (is_null($this->user)|| !$this->user->can('roles.destroy')){
           abort(403, 'Unauthorized Access');
        }

        $role = Role::find($id);
        if (!is_null($role)) {
            $role->delete();
        }

        session()->flash('success', 'Role has been deleted !!');
        return back();
    }
}
