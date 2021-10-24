<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class UsersController extends Controller
{

    public $user;
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);

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
        if (is_null($this->user)|| !$this->user->can('users.index')){
           abort(403, 'Unauthorized Access');
        }

        $users = User::where('type',1)->get();
        return view('admin.pages.users.index', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestUser()
    {
        if (is_null($this->user)|| !$this->user->can('users.guest')){
           abort(403, 'Unauthorized Access');
        }

       $users = User::where('type',0)->get();
       return view('admin.pages.users.guest-user', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (is_null($this->user)|| !$this->user->can('users.create')){
           abort(403, 'Unauthorized Access');
        }

        $roles  = Role::all();
        return view('admin.pages.users.create', compact('roles'));
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
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create New User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = 1;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }else{
             $user->assignRole('user');
        }
        Alert::success('Done!', 'User has been created !!');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         if (is_null($this->user)|| !$this->user->can('users.show')){
           abort(403, 'Unauthorized Access');
        }
        $roles  = User::findById($id);
        return view('admin.pages.users.create', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (is_null($this->user)|| !$this->user->can('users.edit')){
           abort(403, 'Unauthorized Access');
        }

        $user = User::find($id);
        $roles  = Role::all();
        return view('admin.pages.users.edit', compact('user', 'roles'));
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
        // Create New User
        $user = User::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        Alert::success('Done!', 'User has been updated !!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('users.destroy')){
           abort(403, 'Unauthorized Access');
        }

        $user = User::find($id);
        if (!is_null($user)) {
            $user->delete();
        }
        Alert::success('Done!', 'User has been deleted !!');
        return back();
    }
}
