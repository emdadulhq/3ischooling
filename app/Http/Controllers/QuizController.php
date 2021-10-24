<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\MockTestCategory;
use App\Models\Quiz;
use App\Models\Gquiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class QuizController extends Controller
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
        if (is_null($this->user)|| !$this->user->can('question.index')){
            abort(403, 'Unauthorized Access');
         }

        $quizzes = Quiz::all();
        return view('admin.pages.quiz.index', compact('quizzes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user)|| !$this->user->can('question.index')){
            abort(403, 'Unauthorized Access');
         }

        $parentCategories = MockTestCategory::where('parent_id',Null)->get();
        return view('admin.pages.quiz.create', compact('parentCategories'));
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
            'question' => 'required',
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'answer' => 'required',
        ]);

        $quiz = new Quiz();

        $quiz->question = $request->question;

        if ($request->parent_id2) {
            $quiz->mock_test_category_id = $request->parent_id2;
        } else {
            $quiz->mock_test_category_id = $request->parent_id1;
        }

        $quiz->choice1 = $request->choice1;
        $quiz->choice2 = $request->choice2;
        $quiz->choice3 = $request->choice3;
        $quiz->choice4 = $request->choice4;

        $quiz->answer = $request->answer;

        // return $quiz;

        $quiz->save();

        Alert::success('Done!', 'Quiz Added Successfully!');
        return back();

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
        if (is_null($this->user)|| !$this->user->can('question.edit')){
            abort(403, 'Unauthorized Access');
         }

        $quizById = Quiz::findOrFail($id);
        return view('admin.pages.quiz.edit', compact('quizById'));
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
            'question' => 'required',
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
        ]);

        $quiz =[];

        $quiz['question'] = $request->question;

        $quiz['choice1'] = $request->choice1;
        $quiz['choice2'] = $request->choice2;
        $quiz['choice3'] = $request->choice3;
        $quiz['choice4'] = $request->choice4;

        $quiz['answer'] = $request->answer;

        // return $quiz;

        Quiz::where('id', $id)->update($quiz);
        Alert::success('Done!', 'Quiz Update Successfully!');
        return redirect()->route('question.index');
    }

    public function penddingQuizActive($id)
    {
        if (is_null($this->user)|| !$this->user->can('question.pendding.active')){
            abort(403, 'Unauthorized Access');
         }


        $quiz =[];

        $quiz['status'] = 'Active';

        // return $quiz;

        Quiz::where('id', $id)->update($quiz);
        Alert::success('Done!', 'Quiz Actived Successfully!');
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('question.destroy')){
            abort(403, 'Unauthorized Access');
         }

        Quiz::findOrFail($id)->delete();
        Alert::success('Done!', 'Quiz Deleted Successfully!');
        return redirect()->back();

    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testquiz()
    {

        return view('testquiz.index');
    }

    public function gquiz()
    {
        if (is_null($this->user)|| !$this->user->can('question.index')){
            abort(403, 'Unauthorized Access');
         }

        $quizzes = Gquiz::all();
        return view('admin.pages.gquiz.index', compact('quizzes'));
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gquizcreate()
    {
        if (is_null($this->user)|| !$this->user->can('question.index')){
            abort(403, 'Unauthorized Access');
         }
        
        return view('admin.pages.gquiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gquizstore(Request $request)
    {

        $request->validate([
            'title'     => 'required',
            'link'      => 'required',
            
        ]);

        $quiz = new Gquiz();

        $quiz->title = $request->title;
        $quiz->slug = Str::slug($request->title);
        $quiz->link = $request->link;
        $quiz->details = $request->question;

        // return $quiz;

        $quiz->save();

        Alert::success('Done!', 'Quiz Added Successfully!');
        return back();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gquizedit($id)
    {
        if (is_null($this->user)|| !$this->user->can('question.edit')){
            abort(403, 'Unauthorized Access');
         }

        $quizById = Gquiz::findOrFail($id);
        return view('admin.pages.gquiz.edit', compact('quizById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function guizupdate(Request $request, $id)
    {
         

        $quiz =[];

        $quiz['title'] = $request->title;

        $quiz['link'] = $request->link;
        $quiz['slug'] = Str::slug($request->title);
        $quiz['details'] = $request->question;
        

        
        Gquiz::where('id', $id)->update($quiz);
        Alert::success('Done!', 'Quiz Update Successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gquizDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('question.destroy')){
            abort(403, 'Unauthorized Access');
         }

        Gquiz::findOrFail($id)->delete();
        Alert::success('Done!', 'Quiz Deleted Successfully!');
        return redirect()->back();

    }
}
