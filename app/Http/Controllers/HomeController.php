<?php

namespace App\Http\Controllers;

use App\Models\AdmComments;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\AdmissionSubject;
use App\Models\Admission;
use App\Models\Comments;
use App\Models\CourseCategory;
use App\Models\News;
use App\Models\StemSubject;
use App\Models\Stem;
use App\Models\Schooling;
use App\Models\SchoolingSubject;
use App\Models\Subscriber;
use App\Models\Teacher;
use App\Models\MockTestCategory;
use App\Models\NewsTag;
use App\Models\StemComments;
use App\Models\Testimonial;
use App\Models\Quiz;
use App\Models\Gquiz;
use App\Models\User;
use App\Models\UserExamAnswer;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $all_course = Course::all();
        $all_news = News::all();
        $teacher = Teacher::all();
        $testimonials = Testimonial::all();
        $admission = Admission::all();
        $course = Course::all();
        $user = User::all();
        $teacher = Teacher::all();
        $subject = MockTestCategory::all();
        $question = Quiz::all();
        $science=Stem::where('stem_subject_id',1)->get();
        $technology=Stem::where('stem_subject_id',2)->get();
        $engineering=Stem::where('stem_subject_id',3)->get();
        $math=Stem::where('stem_subject_id',4)->get();
        return view('3i_school.pages.index', [
            'courses'       => $all_course,
            'allNews'       => $all_news,
            'teacher'       => $teacher,
            'testimonials'  => $testimonials,
            'science'       => $science,
            'technology'    => $technology,
            'engineering'   => $engineering,
            'math'          => $math,
            'admission'     => $admission,
            'course'        => $course,
            'user'          => $user,
            'teacher'       => $teacher,
            'subject'       => $subject,
            'question'      => $question,
        ]);
    }
    public function kids()
    {

        return view('3i_school.pages.kids');
    }

    public function class5_6()
    {

        return view('3i_school.pages.class5_6');
    }

    public function class7_8()
    {

        return view('3i_school.pages.class7_8');
    }

    public function class9_10()
    {

        return view('3i_school.pages.class9_10');
    }
    public function class11_12()
    {

        return view('3i_school.pages.class11_12');
    }

    public function admission()
    {
        $admissionSubjects = AdmissionSubject::all();
        $admissions = Admission::all();
        return view('3i_school.pages.pre-university',compact('admissionSubjects','admissions'));
    }

    public function admissionDetails($id)
    {


        $admSubject=AdmissionSubject::all();
        $all_course = Admission::all();
        $adm_comment = AdmComments::latest()->get();
        $admissionSubjects = AdmissionSubject::all();
        $singleAdm = Admission::find($id);
        return view('3i_school.pages.admission_details',compact('singleAdm','admissionSubjects','adm_comment', 'all_course','admSubject'));
    }

    //Course search by Tag
    public function admissionByCategory($id){
        $cat= Admission::where('admission_subject_id',$id) ->get();
        return view('3i_school.pages.admission-search-category', compact('cat'));

    }
    public function admissionEnglish()
    {
        $admissionSubjects = AdmissionSubject::all();
        $admissions = Admission::all();
        return view('3i_school.pages.pre-university',compact('admissionSubjects','admissions'));
    }

    public function admissionMath()
    {

        $admissionSubjects = AdmissionSubject::all();
        $admissions = Admission::all();
        return view('3i_school.pages.pre-university',compact('admissionSubjects','admissions'));
    }

    public function admissionMedical()
    {

        $admissionSubjects = AdmissionSubject::all();
        $admissions = Admission::all();
        return view('3i_school.pages.pre-university',compact('admissionSubjects','admissions'));
    }

    public function admissionPhysics()
    {

        $admissionSubjects = AdmissionSubject::all();
        $admissions = Admission::all();
        return view('3i_school.pages.pre-university',compact('admissionSubjects','admissions'));
    }

    public function admissionElectrical()
    {

        $admissionSubjects = AdmissionSubject::all();
        $admissions = Admission::all();
        return view('3i_school.pages.pre-university',compact('admissionSubjects','admissions'));
    }

    public function mockTestMegaMenu()
    {
        $parentCategories = MockTestCategory::where('parent_id',Null)->get();
        $gquiz=Gquiz::latest()->get();
        return view('3i_school.pages.mock-test-mega-menu', compact('parentCategories','gquiz'));
    }


    public function mockTest($slug)
    {
        $quizCategoryId = MockTestCategory::where('slug',$slug)->get('id')->first();
        $quizzes = Quiz::where('mock_test_category_id',$quizCategoryId['id'])->get();
        return view('3i_school.pages.mock-test',compact('quizzes'));
    }

    public function submitAnswer(Request $request)
    {
        $quiz = Quiz::findOrFail($request->quiz_id);
        $result = new UserExamAnswer();

        $result->examinee_id = Auth::user()->id;
        $result->quiz_id = $request->quiz_id;

        if ($request->answer == $quiz->answer) {
             $result->answer = 1;
             $result->score = 1;
        }else{
             $result->answer = 0;
             $result->score = 0;
        }

        // return $result;

        $result->save();

        return back();
    }

    public function SixtyMinutesQuiz()
    {
        return view('3i_school.pages.60-minutes-quiz');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function allCourses()
    {
        $all_course = Course::all();
        return view('3i_school.pages.all-courses', [
            'courses' => $all_course
        ]);
    }
  /**
     * Undocumented function
     *
     * @return void
     */
    public function winterschooling()
    {

        return view('3i_school.pages.register_for_winterschooling');
    }
 /**
     * Undocumented function
     *
     * @return void
     */
    public function jobs()
    {

        return view('3i_school.pages.jobs');
    }
 /**
     * Undocumented function
     *
     * @return void
     */
    public function jobs_assesments()
    {

        return view('3i_school.pages.jobs_assesments');
    }/**
     * Undocumented function
     *
     * @return void
     */
    public function careercounselling()
    {

        return view('3i_school.pages.careercounselling');
    }/**
     * Undocumented function
     *
     * @return void
     */
    public function canada()
    {

        return view('3i_school.pages.HigherStudiesCanada');
    }/**
     * Undocumented function
     *
     * @return void
     */
    public function germany()
    {

        return view('3i_school.pages.HigherStudiesGermany');
    }


    public function singleCourse($id)
    {
        $singleCourse = Course::find($id);
        $course_cat=CourseCategory::all();
        $all_course = Course::all();
        $course_comment = Comments::latest()->get();
        return view('3i_school.pages.course-details',compact('singleCourse', 'course_cat' , 'all_course', 'course_comment'));
    }
        //Course search by Tag
    public function courseByCategory($id){
        $cat= Course::where('course_categorie_id',$id) ->get();
        return view('3i_school.pages.courses-search-category', compact('cat'));

    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function schoolingMegaMenu()
    {
        $schoolingMenus = SchoolingSubject::where('parent_id',Null)->get();
        return view('3i_school.pages.schooling-mega-menu',compact('schoolingMenus'));
    }


    public function schooling($slug)
    {
 
        
        $schoolingSubjectId = SchoolingSubject::where('slug', $slug)->get('id')->first();
        $schooling = Schooling::where('schooling_subject_id',$schoolingSubjectId['id'])->get();
        return view('3i_school.pages.schooling',compact('schooling'));
    }
    public function schoolingCourse($id)
    {
        $singleCourse = Schooling::find($id);
        $course_cat= SchoolingSubject::all();
        $all_course = Schooling::all();
        
        return view('3i_school.pages.schooling-course-details',compact('singleCourse','course_cat','all_course'));
    }

    //Course search by Tag
    public function schoolingByCategory($id){
        $cat= Schooling::where('schooling_subject_id',$id) ->get();
        return view('3i_school.pages.schooling-search-category', compact('cat'));

    }
    
    
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public function stemMegaMenu()
    {
        $stemMenus = StemSubject::all();
        return view('3i_school.pages.stem-mega-menu',compact('stemMenus'));
    }


    public function stem($id)
    {
        $stems = Stem::where('stem_subject_id', $id)->get();
        return view('3i_school.pages.stem',compact('stems'));
    }
    public function stemCourse($id)
    {
        $singleCourse = Stem::find($id);
        $course_cat=StemSubject::all();
        $all_course = Stem::all();
        $course_comment = StemComments::latest()->get();
        return view('3i_school.pages.stem-course-details',compact('singleCourse','course_cat','all_course','course_comment'));
    }

    //Course search by Tag
    public function stemByCategory($id){
        $cat= Stem::where('stem_subject_id',$id) ->get();
        return view('3i_school.pages.stem-search-category', compact('cat'));

    }
    /**
     * Undocumented function
     *
     * @param [Teacher] $id
     * @return void
     */
    public function teacher($id)
    {
        $single_teacher = Teacher::find($id);
        return view('3i_school.pages.teachers-single',compact('single_teacher'));
    }
    public function allteacher()
    {
        $all_teacher = Teacher::all();
        return view('3i_school.pages.teachers',compact('all_teacher'));
    }
    /**
     * News Section
     */
    public function allNews()
    {
        $all_news = News::all();
        return view('3i_school.pages.news', [
            'all_news' => $all_news
        ]);
    }
    public function singleNews($id)
    {
        $singleNews = News::find($id);
        $news_tag=NewsTag::all();
        $all_news = News::all()->take(3);
        return view('3i_school.pages.news-single',compact('singleNews','all_news','news_tag'));
    }


    //post search by Tag
    public function postByTag($id){
        $tags= News::where('news_tag_id',$id) ->get();
        return view('3i_school.pages.news-tag-search', compact('tags'));

    }
        //post search by Search field
    public function postBySearch(Request $request){
        $search_text= $request->search;
        $posts = News::where('title','like','%'.$search_text.'%')->orwhere('details','like','%'.$search_text.'%')->get();
        return view('3i_school.pages.news-search', compact('posts'));
    }
    public function higherstudies()
    {
        return view('3i_school.pages.higher_studies');
    }
    public function ielts()
    {
        return view('3i_school.pages.IELTS');
    }
    public function aptitude()
    {
        return view('3i_school.pages.AptitudeTest');
    }
    public function consultation()
    {
        return view('3i_school.pages.Consultation');
    }
    public function gre()
    {
        return view('3i_school.pages.GRE');
    }
    public function about()
    {
        return view('3i_school.pages.about');
    }
    public function volunteer()
    {
        return view('3i_school.pages.volunteer');
    }
    public function career()
    {
        return view('3i_school.pages.career');
    }
    public function contact()
    {
        return view('3i_school.pages.contact');
    }
    public function subscriber(Request $request){
        Subscriber::create([
           'email'          => $request->email,
       ]);
        return redirect()-> back()->with('success', 'You are subscribed');
    }


}

