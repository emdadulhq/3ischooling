<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Admission;
use App\Models\AdmissionSubject;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\News;
use App\Models\NewsTag;
use App\Models\Quiz;
use App\Models\Gquiz;
use App\Models\Stem;
use App\Models\StemSubject;
use App\Models\Schooling;
use App\Models\SchoolingSubject;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
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
     * @return Response
     */
    public function index()
    {
         if (is_null($this->user)|| !$this->user->can('admin.dashboard')){
           abort(403, 'Unauthorized Access');
        }
        $countusers= User::all();
        $newuserlist= User::latest()->get()->take(5);
        $countquiz= Quiz::all();
        $countcourse = Course::all();
        $countnews = News::all();
        return view('admin.pages.index', compact('countusers', 'countquiz','countcourse','countnews','newuserlist'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function quiz()
    {
        $quizlist= Quiz::latest()->get();
        return view('admin.pages.quiz.60minquiz',[
            'quizlist' => $quizlist
        ]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function course()
    {
        if (is_null($this->user)|| !$this->user->can('admin.course')){
           abort(403, 'Unauthorized Access');
        }

        $course_list = Course::all();

        return view('admin.pages.course.index',compact('course_list'));
    }


/**
 *Course create form
 */
    public function courseCreate()
    {
        if (is_null($this->user)|| !$this->user->can('admin.course.create')){
           abort(403, 'Unauthorized Access');
        }

        $course_cate = CourseCategory::all();

        return view('admin.pages.course.create', compact('course_cate'));
    }

/**
 *Course create form
 */
    public function courseStore(Request $request)
    {
        // $course_list = Course::all();
        Course::create([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,
            'course_categorie_id'   => $request->category,
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
        ]);
        Alert::success('Done!', 'Course Added Successfully!');
        return redirect()-> back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function courseEdit($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.course.edit')){
           abort(403, 'Unauthorized Access');
        }

        $course_cate = CourseCategory::all();
        $course_edit = Course::find($id);
        return view('admin.pages.course.edit', compact('course_edit','course_cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function courseUpdate(Request $request, $id)
    {
        $data = Course::find($id);
        $data-> update([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,            
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
        ]);
        Alert::success('Done!', 'Course Update Successfully!');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function courseDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.course.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = Course::find($id);
        $data-> delete();
        return redirect()-> back()->with('success', 'Course Deleted successfully');
    }

/**
 *Course create form
 */
    public function courseCategory()
    {
        if (is_null($this->user)|| !$this->user->can('admin.course.category')){
           abort(403, 'Unauthorized Access');
        }

        $category_list = CourseCategory::all();

        return view('admin.pages.course.category', compact('category_list'));
    }

/**
 *Course create form
 */
    public function courseCategoryStore(Request $request)
    {
        // $course_list = Course::all();
        CourseCategory::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),

        ]);
        Alert::success('Done!', 'Course Added Successfully!');
        return redirect()-> back();
        // return redirect()-> back()->with(alert()->success('Sweet Alert with success.','Welcome to com')->autoclose(3500));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function courseCategoryDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.course.category.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = CourseCategory::find($id);
        $data-> delete();
        return redirect()-> back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function admission()
    {
        if (is_null($this->user)|| !$this->user->can('admin.admission.delete')){
           abort(403, 'Unauthorized Access');
        }

        $course_list = Admission::all();

        return view('admin.pages.admission.index',compact('course_list'));
    }


/**
 *Admission create form
 */
    public function admissionCreate()
    {
        if (is_null($this->user)|| !$this->user->can('admin.admission.delete')){
           abort(403, 'Unauthorized Access');
        }

        $course_sub = AdmissionSubject::all();

        return view('admin.pages.admission.create', compact('course_sub'));
    }

/**
 *Admission create form
 */
    public function admissionStore(Request $request)
    {
        // $course_list = Course::all();
        Admission::create([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
            'admission_subject_id'  => $request->subject,
        ]);
        Alert::success('Done!', 'Course Added Successfully');
        return redirect()-> back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function admissionEdit($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.admission.delete')){
           abort(403, 'Unauthorized Access');
        }

        $course_sub = AdmissionSubject::all();
        $course_edit = Admission::find($id);
        return view('admin.pages.admission.edit', compact('course_edit','course_sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function admissionUpdate(Request $request, $id)
    {
        $data = Admission::find($id);
        $data-> update([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,            
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
        ]);
        Alert::success('Done!', 'Course Updated Successfully');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function admissionDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.admission.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = Admission::find($id);
        $data-> delete();
        return redirect()-> back()->with('success', 'Course Deleted successfully');
    }

/**
 *Admission create form
 */
    public function admissionSubject()
    {
        if (is_null($this->user)|| !$this->user->can('admin.admission.subject')){
           abort(403, 'Unauthorized Access');
        }

        $subject_list = AdmissionSubject::all();

        return view('admin.pages.admission.subject', compact('subject_list'));
    }

/**
 *Admission create form
 */
    public function admissionSubjectStore(Request $request)
    {
        // $course_list = Course::all();
        AdmissionSubject::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),

        ]);
        Alert::success('Done!', 'Subject Added Successfully!');
        return redirect()-> back();


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function admissionSubjectDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.admission.subject.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = AdmissionSubject::find($id);
        $data-> delete();
        return redirect()-> back();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function schooling()
    {
        if (is_null($this->user)|| !$this->user->can('admin.schooling.create')){
           abort(403, 'Unauthorized Access');
        }

        $course_list = Schooling::all();
        return view('admin.pages.schooling.index',compact('course_list'));
    }


/**
 *STEM create form
 */
    public function schoolingCreate()
    {
        if (is_null($this->user)|| !$this->user->can('admin.schooling.create')){
           abort(403, 'Unauthorized Access');
        }
        $parentCategories = SchoolingSubject::where('parent_id',Null)->get();
        $course_sub = SchoolingSubject::all();
        return view('admin.pages.schooling.create', compact('course_sub', 'parentCategories'));
    }

/**
 *STEM store
 */
    public function schoolingStore(Request $request)
    {
        // $course_list = Course::all();
        
        if ($request->parent_id2) {
            $category = $request->parent_id2;
        } else {
            $category = $request->parent_id1;
        }

        Schooling::create([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,
            'schooling_subject_id'  => $category,
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
        ]);
        Alert::success('Done!', 'Course Added Successfully!');
        return redirect()-> back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function schoolingEdit($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.schooling.edit')){
           abort(403, 'Unauthorized Access');
        }

        $course_sub = SchoolingSubject::all();
        $course_edit = Schooling::find($id);
        return view('admin.pages.schooling.edit', compact('course_edit','course_sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function schoolingUpdate(Request $request, $id)
    {
        $data = Schooling::find($id);
        $data-> update([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
        ]);
        Alert::success('Done!', 'Course Update Successfully!');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function schoolingDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.schooling.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = Schooling::find($id);
        $data-> delete();
        return redirect()-> back();
    }

/**
 *Course create form
 */
    public function schoolingSubject()
    {
        if (is_null($this->user)|| !$this->user->can('admin.schooling.subject')){
           abort(403, 'Unauthorized Access');
        }
       
        $schoolingCategories = SchoolingSubject::where('parent_id', null)->get();
        $subject_list = SchoolingSubject::all();
        return view('admin.pages.schooling.subject', compact('subject_list','schoolingCategories'));
    }
  /**
     * Display a listing of child Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function childCategory($id)
    {
        $schoolingCategories = SchoolingSubject::where('parent_id', $id)->get();
        return view ('admin.pages.schooling.sub_category',compact('schoolingCategories'));
    }

/**
 *Course create form
 */
    public function schoolingSubjectStore(Request $request)
    {
        $file_name='';
        if ($request -> hasFile('photo')){
            $img = $request ->file('photo');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('3i_school/img/schooling/'),$file_name);
        }

        $request->validate([
            'name' => 'required',
        ]);

        $data['name']=$request->name;
        $data['slug']=Str::slug($request->name);
        $data['photo']=$file_name;
        $data['brief_details']=$request->details;
        if ($request->parent_id2) {
            $data['parent_id']=$request->parent_id2;
        } else {
            $data['parent_id']=$request->parent_id1;
        }

        SchoolingSubject::create($data);
        
        Alert::success('Done!', 'Subject Added Successfully!');
        return redirect()-> back();


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function schoolingSubjectDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.schooling.subject.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = SchoolingSubject::find($id);
        $data-> delete();
        if (file_exists('3i_school/img/schooling/'.$data->photo)){
            unlink('3i_school/img/schooling/'.$data->photo);
        }

        return redirect()-> back()->with('success', 'Course Subject Deleted successfully');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function stem()
    {
        if (is_null($this->user)|| !$this->user->can('admin.stem.create')){
           abort(403, 'Unauthorized Access');
        }

        $course_list = Stem::all();
        return view('admin.pages.stem.index',compact('course_list'));
    }


/**
 *STEM create form
 */
    public function stemCreate()
    {
        if (is_null($this->user)|| !$this->user->can('admin.stem.create')){
           abort(403, 'Unauthorized Access');
        }

        $course_sub = StemSubject::all();
        return view('admin.pages.stem.create', compact('course_sub'));
    }

/**
 *STEM store
 */
    public function stemStore(Request $request)
    {
        // $course_list = Course::all();
        Stem::create([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,
            'stem_subject_id'       => $request->subject,
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,
        ]);
        Alert::success('Done!', 'Course Added Successfully!');
        return redirect()-> back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function stemEdit($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.stem.edit')){
           abort(403, 'Unauthorized Access');
        }

        $course_sub = StemSubject::all();
        $course_edit = Stem::find($id);
        return view('admin.pages.stem.edit', compact('course_edit','course_sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function stemUpdate(Request $request, $id)
    {
        $data = Stem::find($id);
        $data-> update([
            'title'                 => $request->title,
            'slug'                  => Str::slug($request->title),
            'link'                  => $request->link,
            'details'               => $request->details,
            'link1'                 => $request->link1,
            'link2'                 => $request->link2,
            'link3'                 => $request->link3,            
        ]);
        Alert::success('Done!', 'Course Update Successfully!');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function stemDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.stem.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = Stem::find($id);
        $data-> delete();
        return redirect()-> back();
    }

/**
 *Course create form
 */
    public function stemSubject()
    {
        if (is_null($this->user)|| !$this->user->can('admin.stem.subject')){
           abort(403, 'Unauthorized Access');
        }

        $subject_list = StemSubject::all();
        return view('admin.pages.stem.subject', compact('subject_list'));
    }

/**
 *Course create form
 */
    public function stemSubjectStore(Request $request)
    {
        $file_name='';
        if ($request -> hasFile('photo')){
            $img = $request ->file('photo');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('3i_school/img/STEM/'),$file_name);
        }
        StemSubject::create([
            'name'              => $request->name,
            'slug'              => Str::slug($request->name),
            'photo'             => $file_name,
            'brief_details'     => $request->details,
        ]);
        Alert::success('Done!', 'Subject Added Successfully!');
        return redirect()-> back();


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function stemSubjectDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.stem.subject.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = StemSubject::find($id);
        $data-> delete();
        if (file_exists('3i_school/img/STEM/'.$data->photo)){
            unlink('3i_school/img/STEM/'.$data->photo);
        }

        return redirect()-> back()->with('success', 'Course Subject Deleted successfully');
    }



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function news()
    {
        if (is_null($this->user)|| !$this->user->can('admin.news')){
           abort(403, 'Unauthorized Access');
        }

        $news_list = News::all();

        return view('admin.pages.news.index',compact('news_list'));
    }


/**
 *Course create form
 */
    public function newsCreate()
    {
        if (is_null($this->user)|| !$this->user->can('admin.news.create')){
           abort(403, 'Unauthorized Access');
        }

        $news_tag = NewsTag::all();

        return view('admin.pages.news.create', compact('news_tag'));
    }

/**
 *Course create form
 */
    public function newsStore(Request $request)
    {

        $this-> validate($request,[
            'title'     => 'required',
            'details'   => 'required',
            'ftd_img'   => 'required',

        ]);

        $file_name='';
        if ($request -> hasFile('ftd_img')){
            $img = $request ->file('ftd_img');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('media/news/'),$file_name);

        }

        News::create([
           'title'          => $request ->title,
           'slug'           => Str::slug($request ->title),
        //    'user_id'        => Auth::user()->id,
           'details'        => $request -> details,
           'ftd_img'        => $file_name,
           'news_tag_id'    => $request->tag,
        ]);
        Alert::success('Done!', 'News Added Successfully!');
        return redirect()-> back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function newsEdit($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.news.edit')){
           abort(403, 'Unauthorized Access');
        }

        $news_tag = NewsTag::all();
        $news_edit = News::find($id);
        return view('admin.pages.news.edit', compact('news_edit','news_tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function newsUpdate(Request $request, $id)
    {

        $data = News::find($id);

        $file_name='';
        if ($request -> hasFile('new_photo')){
            $img = $request ->file('new_photo');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('media/news/'),$file_name);
            if (file_exists('media/news/'.$request->old_photo)){
                unlink('media/news/'.$request->old_photo);

            }
        }else{
            $file_name= $request-> old_photo;
        }

        $data-> update([
            'title'          => $request ->title,
            'slug'           => Str::slug($request ->title),
            'details'        => $request -> details,
            'ftd_img'        => $file_name,
            
        ]);
        Alert::success('Done!', 'News Update Successfully!');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function newsDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.news.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = News::find($id);
        $data-> delete();
        if (file_exists('media/news/'.$data->ftd_img)){
            unlink('media/news/'.$data->ftd_img);
        }

        return redirect()-> back();
    }

/**
 *News tag create form
 */
    public function newsTag()
    {
        if (is_null($this->user)|| !$this->user->can('admin.news.tag')){
           abort(403, 'Unauthorized Access');
        }

        $tag_list = NewsTag::all();

        return view('admin.pages.news.tag', compact('tag_list'));
    }

/**
 *News tag create form
 */
    public function newsTagStore(Request $request)
    {
        // $course_list = Course::all();
        NewsTag::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),

        ]);
        Alert::success('Done!', 'Tag Added Successfully!');
        return redirect()-> back();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function newsTagDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.news.tag.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = NewsTag::find($id);
        $data-> delete();
        return redirect()-> back();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function teacher()
    {
        if (is_null($this->user)|| !$this->user->can('admin.teacher')){
           abort(403, 'Unauthorized Access');
        }

        $teacher_list = Teacher::all();

        return view('admin.pages.teacher.index',compact('teacher_list'));
    }


/**
 *Teacher create form
 */
    public function teacherCreate()
    {
        if (is_null($this->user)|| !$this->user->can('admin.teacher.create')){
           abort(403, 'Unauthorized Access');
        }

        return view('admin.pages.teacher.create');
    }

/**
 *Teacher Update form
 */
    public function teacherStore(Request $request)
    {


        $file_name='';
        if ($request -> hasFile('ftd_img')){
            $img = $request ->file('ftd_img');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('media/teacher/'),$file_name);
        }

        Teacher::create([
           'unique_id'    => strtoupper(Str::random(5)),
           'name'         => $request->name,
           'email'        => $request->email,
           'phone'        => $request->phone,
           'department'   => $request->department,
           'about'        => $request->about,
           'skill_bn'     => $request->skill_bn,
           'skill_en'     => $request->skill_en,
           'skill_sp'     => $request->skill_sp,
           'skill_wr'     => $request->skill_wr,
           'link_fb'      => $request->link_fb,
           'link_tw'      => $request->link_tw,
           'link_li'      => $request->link_li,
           'link_in'      => $request->link_in,
           'link_in'      => $request->link_in,
           'photo'        => $file_name,
        ]);
        Alert::success('Done!', 'Teacher Added Successfully!');
        return redirect()-> back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function teacherEdit($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.teacher.edit')){
           abort(403, 'Unauthorized Access');
        }

        $teacher_edit = Teacher::find($id);
        return view('admin.pages.teacher.edit', compact('teacher_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function teacherUpdate(Request $request, $id)
    {

        $data = Teacher::find($id);

        $file_name='';
        if ($request -> hasFile('new_photo')){
            $img = $request ->file('new_photo');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('media/teacher/'),$file_name);
            if (file_exists('media/teacher/'.$request->old_photo)){
                unlink('media/teacher/'.$request->old_photo);

            }
        }else{
            $file_name= $request-> old_photo;
        }

        $data-> update([
            'unique_id'    => strtoupper(Str::random(5)),
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'department'   => $request->department,
            'about'        => $request->about,
            'skill_bn'     => $request->skill_bn,
            'skill_en'     => $request->skill_en,
            'skill_sp'     => $request->skill_sp,
            'skill_wr'     => $request->skill_wr,
            'link_fb'      => $request->link_fb,
            'link_tw'      => $request->link_tw,
            'link_li'      => $request->link_li,
            'link_in'      => $request->link_in,
            'link_in'      => $request->link_in,
            'photo'        => $file_name,
        ]);
        Alert::success('Done!', 'Teachers Profile Update Successfully!');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function teacherDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.teacher.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = Teacher::find($id);
        $data-> delete();
        if (file_exists('media/teacher/'.$data->photo)){
            unlink('media/teacher/'.$data->photo);
        }

        return redirect()-> back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function testimonial()
    {
        if (is_null($this->user)|| !$this->user->can('admin.testimonial')){
           abort(403, 'Unauthorized Access');
        }

        $testimonial_list = Testimonial::all();

        return view('admin.pages.testimonial.index',compact('testimonial_list'));
    }


    public function testimonialStore(Request $request)
    {
        $file_name='';
        if ($request -> hasFile('photo')){
            $img = $request ->file('photo');
            $file_name= md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img -> move(public_path('media/testimonial/'),$file_name);
        }

        Testimonial::create([
           'name'         => $request->name,
           'star'         => $request->star,
           'details'      => $request->details,
           'photo'        => $file_name,
        ]);
        Alert::success('Done!', 'Review Added Successfully!');
        return redirect()-> back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function testimonialDestroy($id)
    {
        if (is_null($this->user)|| !$this->user->can('admin.testimonial.delete')){
           abort(403, 'Unauthorized Access');
        }

        $data = Testimonial::find($id);
        $data-> delete();
        if (file_exists('media/testimonial/'.$data->photo)){
            unlink('media/testimonial/'.$data->photo);
        }

        return redirect()-> back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function mailbox()
    {
        return view('admin.mailbox');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function compose()
    {
        return view('admin.mailbox-compose');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function readmail()
    {
        return view('admin.mailbox-read');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function bcalender()
    {
        return view('admin.basic-calendar');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function lcalender()
    {
        return view('admin.list-view-calendar');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function bookmark()
    {
        return view('admin.bookmark');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function review()
    {
        return view('admin.review');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function listing()
    {
        return view('admin.add-listing');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function profile()
    {
        return view('admin.user-profile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function permission()
    {
        $users= User::latest()->get();
        return view('admin.user-permission',[
            'users' => $users
        ]);

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function minquiz()
    {
        $gquiz=Gquiz::latest()->get();
        return view('60minutesQuiz.index', compact('gquiz'));


    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function show_quiz()
    {
        $questions=Quiz::all();
        $student_id=User::get('id',3);
        return view('60minutesQuiz.show',compact('questions','student_id'));


    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function startquiz()
    {

        return view('60minutesQuiz.questions');


    }



    public function run_quiz(){

        $quizess = Quiz::all();

        return response()->json(['quizess' => $quizess]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this -> validate($request,[
            'subject'   => 'required',
            'question'  => 'required',
            'choice1'   => 'required',
            'choice2'   => 'required',
            'choice3'   => 'required',
            'choice4'   => 'required',
            'answer'    => 'required',

        ]);
        Quiz::create([
            'subject'   => $request->subject,
            'question'  => $request->question,
            'choice1'   => $request->choice1,
            'choice2'   => $request->choice2,
            'choice3'   => $request->choice3,
            'choice4'   => $request->choice4,
            'answer'    => $request->answer,

        ]);
        Alert::success('Done!', 'Quiz Added Successfully!');
        return redirect()-> back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = Quiz::find($id);
            return [
            'subject'     => $data->subject,
            'question'    => $data->question,
            'choice1'     => $data->choice1,
            'choice2'     => $data->choice2,
            'choice3'     => $data->choice3,
            'choice4'     => $data->choice4,

        ];

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
