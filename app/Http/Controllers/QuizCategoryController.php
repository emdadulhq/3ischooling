<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\MockTestCategory;
use Auth;
use Illuminate\Support\Str;

class QuizCategoryController extends Controller
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
        if (is_null($this->user)|| !$this->user->can('quizCategory.index')){
            abort(403, 'Unauthorized Access');
         }

        $quizCategories = MockTestCategory::where('parent_id', null)->get();
        return view ('admin.pages.quiz_category.index',compact('quizCategories'));
    }

     /**
     * Display a listing of child Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function childCategory($id)
    {
        $quizCategories = MockTestCategory::where('parent_id', $id)->get();
        return view ('admin.pages.quiz_category.sub_category',compact('quizCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (is_null($this->user)|| !$this->user->can('quizCategory.create')){
            abort(403, 'Unauthorized Access');
         }

        $quizCategories = MockTestCategory::where('parent_id', null)->get();
        return view ('admin.pages.quiz_category.create',compact('quizCategories'));
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
        ]);

        $data['name']=$request->name;
        $data['slug']=Str::slug($request->name);
        if ($request->parent_id2) {
            $data['parent_id']=$request->parent_id2;
        } else {
            $data['parent_id']=$request->parent_id1;
        }


        // return $data;
        MockTestCategory::create($data);
        Alert::success('Done!', 'Category Added Successfully!');
        return redirect()->route('quizCategory.index');
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

        if (is_null($this->user)|| !$this->user->can('quizCategory.edit')){
            abort(403, 'Unauthorized Access');
         }

        $quizCategoryById = MockTestCategory::find($id);
        return view ('admin.pages.quiz_category.edit',compact('quizCategoryById'));
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
        $request->validate([
            'name' => 'required',
        ]);

        $data['name'] = $request->name;

        MockTestCategory::where('id', $id)->update($data);
        Alert::success('Done!', 'Category Update Successfully!');
        return redirect()->route('quizCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (is_null($this->user)|| !$this->user->can('quizCategory.destroy')){
            abort(403, 'Unauthorized Access');
         }

        MockTestCategory::findOrFail($id)->delete();
        Alert::success('Done!', 'Category Deleted Successfully!');
        return redirect()->back();
    }


    public function getSubCategory(Request $request)
    {

        $categories = MockTestCategory::where('parent_id', $request->id)->get();

        return response()->json(['categories' => $categories]);

    }

}
