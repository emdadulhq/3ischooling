<?php

namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class GuestUserController extends Controller
{

    use AuthenticatesUsers;


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

       $users = User::whereNotIn('type',[1])->get();
       return view('3i_school.pages.profile_dashboard.profile_dashboard', compact('users'));
        // return 'This is User dashboard!!';
    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profiledashboard()
    {

       $users = User::whereNotIn('type',[1])->get();
       return view('3i_school.pages.profile_dashboard.profile_dashboard' , compact('users'));
       
        // return 'This is User dashboard!!';
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profilemenu()
    {
       
       return view('3i_school.pages.profile_dashboard.profile_menu');
       
        // return 'This is User dashboard!!';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function settingsUpdate(Request $request, $id)
    {

        $data = User::find($id);

        $file_name='';
        if ($request -> hasFile('new_photo')){
            $img = $request ->file('new_photo');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('/media/users/'),$file_name);
            if (file_exists('/media/users/'.$request->old_photo)){
                unlink(public_path('/media/users/').$request->old_photo);

            }else{
                $file_name= $request-> old_photo;
            }
        }

        $data-> update([
            'phone'          => $request -> phone,
            'photo'          => $file_name,
        ]);
        Alert::success('Done!', 'Update Successfully!');
        return redirect()-> back();
    }
    public function additionalUpdate(Request $request, $id)
    {

       $info =[];

        $info['gender'] = $request->gender;
        $info['education'] = $request->education;
        $info['institute'] = $request->institute;
        $info['dob'] = $request->dob;
        $info['country'] = $request->country;



        User::where('id', $id)->update($info);
        Alert::success('Done!', 'User Update Successfully!');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        if (is_null($this->user)|| !$this->user->can('guest-users.index')){
           abort(403, 'Unauthorized Access');
        }

       $user = User::findById($id);
       return view('admin.pages.users.guest-profile', compact('user'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
