<?php

namespace App\Http\Controllers;

use App\Models\AdmComments;
use App\Models\Comments;
use App\Models\NewsComments;
use App\Models\StemComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
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


    //For Course single section comments and reply

    public function postComment(Request $request){

        Comments::create([
           'course_id'      =>  $request -> post_id,
           'user_id'        =>  Auth::user()-> id,
           'comment_txt'    =>  $request -> comments,

        ]);
        return redirect()-> back()->with('success', 'Commented successfully');


    }

    public function courseCommentReply(Request $request){
        Comments::create([
           'course_id'      => $request->post_id,
           'comment_id'     => $request->comment_id,
           'user_id'        => Auth::user()-> id,
           'comment_txt'    => $request->reply_txt,
        ]);
        return redirect()-> back()->with('success', 'Replied successfully');

    }


//For news single section comments and reply
    public function newsComment(Request $request){
        NewsComments::create([
            'news_id'        =>  $request -> post_id,
            'user_id'        =>  Auth::user()-> id,
            'comment_txt'    =>  $request -> comments,
        ]);
        return redirect()-> back()->with('success', 'Commented successfully');

    }

    public function newsCommentReply(Request $request){
        NewsComments::create([
           'news_id'        => $request->post_id,
           'comment_id'     => $request->comment_id,
           'user_id'        => Auth::user()-> id,
           'comment_txt'    => $request->reply_txt,
        ]);
        return redirect()-> back()->with('success', 'Replied successfully');

    }


    //For Admission single section comments and reply
    public function admComment(Request $request){
        AdmComments::create([
            'admission_id'   =>  $request -> post_id,
            'user_id'        =>  Auth::user()-> id,
            'comment_txt'    =>  $request -> comments,
        ]);
        return redirect()-> back()->with('success', 'Commented successfully');

    }

    public function CommentReply(Request $request){
        AdmComments::create([
           'admission_id'   => $request->post_id,
           'comment_id'     => $request->comment_id,
           'user_id'        => Auth::user()-> id,
           'comment_txt'    => $request->reply_txt,
        ]);
        return redirect()-> back()->with('success', 'Replied successfully');

    }
    //For Stem single section comments and reply
    public function stemComment(Request $request){
        StemComments::create([
            'stem_id'        =>  $request -> post_id,
            'user_id'        =>  Auth::user()-> id,
            'comment_txt'    =>  $request -> comments,
        ]);
        return redirect()-> back()->with('success', 'Commented successfully');

    }

    public function stemCommentReply(Request $request){
        StemComments::create([
           'stem_id'        => $request->post_id,
           'comment_id'     => $request->comment_id,
           'user_id'        => Auth::user()-> id,
           'comment_txt'    => $request->reply_txt,
        ]);
        return redirect()-> back()->with('success', 'Replied successfully');

    }

}
