<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache', function() {
    $output = new \Symfony\Component\Console\Output\BufferedOutput;
    \Artisan::call('cache:clear', $output);
    dd($output->fetch());
});
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/exam',function(){
// 	return view('/exam.create');
// });


Route::get('/test-page', function () {
    return view('3i_school.pages.test');
});




Route::get('/winterschooling', 'HomeController@winterschooling')->name('winterschooling');
Route::get('/jobs_assesments', 'HomeController@jobs_assesments')->name('jobs_assesments');
Route::get('/careercounselling', 'HomeController@careercounselling')->name('careercounselling');
Route::get('/canada', 'HomeController@canada')->name('canada');
Route::get('/germany', 'HomeController@germany')->name('germany');
Route::get('/jobs', 'HomeController@jobs')->name('jobs');


//Guest User Management
Route::get('/profiledashboard', 'GuestUserController@profiledashboard')->name('profile_dashboard');
Route::get('/profilemenu', 'GuestUserController@profilemenu')->name('profilemenu');

Route::get('/profilesettings', function () {
    return view('3i_school.pages.profile_dashboard.profile_settings');
});
Route::post('/settings-update/{id}','GuestUserController@settingsUpdate')->name('settings.update');

Route::get('/profilesettingsadditional', function () {
    return view('3i_school.pages.profile_dashboard.profile_settings_additional');
});

Route::get('/profilepreviousresult', function () {
    return view('3i_school.pages.profile_dashboard.profile_previous_result');
});
Route::get('/profilesingleresult', function () {
    return view('3i_school.pages.profile_dashboard.profile_single_result');
});


Route::post('/additional-update/{id}','GuestUserController@additionalUpdate')->name('additional.update');
Route::get('/profile2', function () {
    return view('3i_school.pages.profile_2');
});

//Higher Studies Rouing
Route::get('/HigherStudies', function () {
    return view('3i_school.pages.higher_studies');
});

Route::get('/HigherStudiesIELTS', function () {
    return view('3i_school.pages.IELTS');
});

Route::get('/HigherStudiesGRE', function () {
    return view('3i_school.pages.GRE');
});

Route::get('/HigherStudiesAptitudeTest', function () {
    return view('3i_school.pages.AptitudeTest');
});

Route::get('/HigherStudiesConsultation', function () {
    return view('3i_school.pages.Consultation');
});



Route::group(['middleware' => 'prevent-back-history'],function(){



Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('login');

})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');



Auth::routes(['verify' => true]);



Route::get('/', 'HomeController@index')->name('home');

////   for schooling  ////
Route::get('/kids', 'HomeController@kids')->name('kids');
Route::get('/class-5-&-6', 'HomeController@class5_6')->name('class.5_6');
Route::get('/class-7-&-8', 'HomeController@class7_8')->name('class.7_8');
Route::get('/class-9-&-10', 'HomeController@class9_10')->name('class.9_10');
Route::get('/class-11-&-12', 'HomeController@class11_12')->name('class.11_12');

////   for pre-university  ////
Route::get('/pre-university/admission', 'HomeController@admission')->name('admission');
Route::get('/pre-university/admission/{id}', 'HomeController@admissionDetails')->name('admission.details');
Route::get('/pre-university-category/{id}','HomeController@admissionByCategory')->name('admission.category');
Route::get('/pre-university/admission-english', 'HomeController@admissionEnglish')->name('admission.english');
Route::get('/pre-university/admission-maths', 'HomeController@admissionMath')->name('admission.maths');
Route::get('/pre-university/admission-medical', 'HomeController@admissionMedical')->name('admission.medical');
Route::get('/pre-university/admission-physics', 'HomeController@admissionPhysics')->name('admission.physics');
Route::get('/pre-university/admission-electrical', 'HomeController@admissionElectrical')->name('admission.electrical');
Route::post('adm-comments', [App\Http\Controllers\CommentsController::class, 'admComment'])->name('adm.comment');
Route::post('adm-comments-reply', [App\Http\Controllers\CommentsController::class, 'admCommentReply'])->name('adm.comment.reply');

////   for mock-tests  ////
Route::get('/mock-tests', 'HomeController@mockTestMegaMenu')->name('mock_test_menu');
Route::get('/mock-tests/{slug}', 'HomeController@mockTest')->name('mock_test')->middleware('verified');
Route::get('/60-munite-quiz', 'HomeController@SixtyMinutesQuiz')->name('60_minutes.quiz')->middleware('verified');
Route::post('/submit-answer', 'HomeController@submitAnswer')->name('mocktest.submit');


////   for all-courses  ////
Route::get('/courses', 'HomeController@allCourses')->name('courses');
Route::get('/singleCourse/{id}', 'HomeController@singleCourse')->name('singleCourse');
Route::get('/course-category/{id}','HomeController@courseByCategory')->name('course.category');
Route::post('course-comments', [App\Http\Controllers\CommentsController::class, 'postComment'])->name('course.comment');
Route::post('course-comments-reply', [App\Http\Controllers\CommentsController::class, 'courseCommentReply'])->name('course.comment.reply');


////   for all-news  ////
Route::get('/news', 'HomeController@allNews')->name('news');
Route::get('/singleNews/{id}', 'HomeController@singleNews')->name('singleNews');
Route::get('/news-tag/{id}','HomeController@postByTag')->name('news.tag');
Route::get('/news-search','HomeController@postBySearch')->name('news.search');
Route::post('/news-comments', [App\Http\Controllers\CommentsController::class, 'newsComment'])->name('news.comment');
Route::post('/news-comments-reply', [App\Http\Controllers\CommentsController::class, 'newsCommentReply'])->name('news.comment.reply');


//// for higherstudies ////
Route::get('/higherstudies', 'HomeController@higherstudies')->name('higherstudies');
//// for aptitude ////
Route::get('/aptitude', 'HomeController@aptitude')->name('aptitude');
//// for consultation ////
Route::get('/consultation', 'HomeController@consultation')->name('consultation');
//// for gre ////
Route::get('/gre', 'HomeController@gre')->name('gre');
//// for ielts ////
Route::get('/ielts', 'HomeController@ielts')->name('ielts');
//// for about ////
Route::get('/about', 'HomeController@about')->name('about');
//// for volunteer ////
Route::get('/volunteer', 'HomeController@volunteer')->name('volunteer');
//// for career ////
Route::get('/career', 'HomeController@career')->name('career');
//// for contact ////
Route::get('/contact', 'HomeController@contact')->name('contact');

////   for schooling  ////
Route::get('/schooling_menu', 'HomeController@schoolingMegaMenu')->name('schooling_menu');
Route::get('/schooling/{slug}', 'HomeController@schooling')->name('schooling');
Route::get('/schooling-course/{id}', 'HomeController@schoolingCourse')->name('schooling.course');
Route::get('/schooling-category/{id}','HomeController@schoolingByCategory')->name('schooling.category');

////   for stem  ////
Route::get('/stem_menu', 'HomeController@stemMegaMenu')->name('stem_menu');
Route::get('/stem/{id}', 'HomeController@stem')->name('stem');
Route::get('/stem-course/{id}', 'HomeController@stemCourse')->name('stem.course');
Route::get('/stem-category/{id}','HomeController@stemByCategory')->name('stem.category');
Route::post('stem-comments', [App\Http\Controllers\CommentsController::class, 'stemComment'])->name('stem.comment');
Route::post('stem-comments-reply', [App\Http\Controllers\CommentsController::class, 'stemCommentReply'])->name('stem.comment.reply');


Route::post('/subscriber', 'HomeController@subscriber')->name('subscriber');
Route::get('/all_teacher', 'HomeController@allteacher')->name('all.teacher');
Route::get('/teacher/{id}', 'HomeController@teacher')->name('teacher');


/**
 * Frontend quiz management
 */
Route::get('/minquiz','AdminController@minquiz')->name('admin.minquiz');
Route::get('/startquiz','AdminController@startquiz')->name('admin.startquiz');
Route::get('/run_quiz','AdminController@run_quiz')->name('admin.run_quiz');
Route::get('/show_quiz','AdminController@show_quiz')->name('admin.show_quiz');



Route::get('/admin_dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/user_dashboard', 'GuestUserController@index')->name('user.dashboard');

Route::group([ 'prefix'=>'admin'],function(){
    Route::get('/quiz','AdminController@quiz')->name('admin.quiz');

    /**
     * Quiz management
     */
    Route::get('/subcat', 'QuizCategoryController@getSubCategory')->name('subcat');
    Route::get('/sub_category/{id}', 'QuizCategoryController@childCategory')->name('sub_category');
    Route::resource('quizCategory','QuizCategoryController');

    Route::resource('question','QuizController');
    Route::patch('/pendding-question-active/{id}', 'QuizController@penddingQuizActive')->name('question.pendding.active');
    Route::get('/gquiz','QuizController@gquiz')->name('admin.gquiz');
    Route::get('/gquizcreate','QuizController@gquizcreate')->name('admin.gquizcreate');    
    Route::post('/gquizstore','QuizController@gquizstore')->name('admin.gquizstore');
    Route::get('/gquiz-delete/{id}','QuizController@gquizDestroy')->name('admin.gquiz.delete');
    Route::get('/gquiz-edit/{id}','QuizController@gquizedit')->name('admin.gquiz.edit');
    Route::post('/gquiz-update/{id}','QuizController@guizupdate')->name('admin.gquiz.update');
     /**
     * Course management
     */
    Route::get('/course','AdminController@course')->name('admin.course');
    Route::get('/course-add','AdminController@courseCreate')->name('admin.course.create');
    Route::post('/course-store','AdminController@courseStore')->name('admin.course.store');
    Route::get('/course-delete/{id}','AdminController@courseDestroy')->name('admin.course.delete');
    Route::get('/course-edit/{id}','AdminController@courseEdit')->name('admin.course.edit');
    Route::post('/course-update/{id}','AdminController@courseUpdate')->name('admin.course.update');
    Route::get('/course-category','AdminController@courseCategory')->name('admin.course.category');
    Route::post('/course-category-store','AdminController@courseCategoryStore')->name('admin.course.category.store');
    Route::get('/course-category-delete/{id}','AdminController@courseCategoryDestroy')->name('admin.course.category.delete');
    /**
     * News management
     */
    Route::get('/news','AdminController@news')->name('admin.news');
    Route::get('/news-add','AdminController@newsCreate')->name('admin.news.create');
    Route::post('/news-store','AdminController@newsStore')->name('admin.news.store');
    Route::get('/news-delete/{id}','AdminController@newsDestroy')->name('admin.news.delete');
    Route::get('/news-edit/{id}','AdminController@newsEdit')->name('admin.news.edit');
    Route::post('/news-update/{id}','AdminController@newsUpdate')->name('admin.news.update');
    Route::get('/news-tag','AdminController@newsTag')->name('admin.news.tag');
    Route::post('/news-tag-store','AdminController@newsTagStore')->name('admin.news.tag.store');
    Route::get('/news-tag-delete/{id}','AdminController@newsTagDestroy')->name('admin.news.tag.delete');
 /**
     * Admission Course management
     */
    Route::get('/admission','AdminController@admission')->name('admin.admission');
    Route::get('/admission-add','AdminController@admissionCreate')->name('admin.admission.create');
    Route::post('/admission-store','AdminController@admissionStore')->name('admin.admission.store');
    Route::get('/admission-delete/{id}','AdminController@admissionDestroy')->name('admin.admission.delete');
    Route::get('/admission-edit/{id}','AdminController@admissionEdit')->name('admin.admission.edit');
    Route::post('/admission-update/{id}','AdminController@admissionUpdate')->name('admin.admission.update');
    Route::get('/admission-subject','AdminController@admissionSubject')->name('admin.admission.subject');
    Route::post('/admission-subject-store','AdminController@admissionSubjectStore')->name('admin.admission.subject.store');
    Route::get('/admission-subject-delete/{id}','AdminController@admissionSubjectDestroy')->name('admin.admission.subject.delete');
    /**
     * STEM Course management
     */
    Route::get('/stem','AdminController@stem')->name('admin.stem');
    Route::get('/stem-add','AdminController@stemCreate')->name('admin.stem.create');
    Route::post('/stem-store','AdminController@stemStore')->name('admin.stem.store');
    Route::get('/stem-delete/{id}','AdminController@stemDestroy')->name('admin.stem.delete');
    Route::get('/stem-edit/{id}','AdminController@stemEdit')->name('admin.stem.edit');
    Route::post('/stem-update/{id}','AdminController@stemUpdate')->name('admin.stem.update');
    Route::get('/stem-subject','AdminController@stemSubject')->name('admin.stem.subject');
    Route::post('/stem-subject-store','AdminController@stemSubjectStore')->name('admin.stem.subject.store');
    Route::get('/stem-subject-delete/{id}','AdminController@stemSubjectDestroy')->name('admin.stem.subject.delete');
    /**
     * Schooling Course management
     */
    Route::get('/schooling','AdminController@schooling')->name('admin.schooling');
    Route::get('/schooling-add','AdminController@schoolingCreate')->name('admin.schooling.create');
    Route::post('/schooling-store','AdminController@schoolingStore')->name('admin.schooling.store');
    Route::get('/schooling-delete/{id}','AdminController@schoolingDestroy')->name('admin.schooling.delete');
    Route::get('/schooling-edit/{id}','AdminController@schoolingEdit')->name('admin.schooling.edit');
    Route::post('/schooling-update/{id}','AdminController@schoolingUpdate')->name('admin.schooling.update');
    Route::get('/schooling-subject','AdminController@schoolingSubject')->name('admin.schooling.subject');
    Route::post('/schooling-subject-store','AdminController@schoolingSubjectStore')->name('admin.schooling.subject.store');
    Route::get('/schooling-subject-delete/{id}','AdminController@schoolingSubjectDestroy')->name('admin.schooling.subject.delete');
    Route::get('/schooling_sub_category/{id}', 'AdminController@childCategory')->name('schooling_sub_category');
    /**
     * Teacher management
     */
    Route::get('/teacher','AdminController@teacher')->name('admin.teacher');
    Route::get('/teacher-add','AdminController@teacherCreate')->name('admin.teacher.create');
    Route::post('/teacher-store','AdminController@teacherStore')->name('admin.teacher.store');
    Route::get('/teacher-delete/{id}','AdminController@teacherDestroy')->name('admin.teacher.delete');
    Route::get('/teacher-edit/{id}','AdminController@teacherEdit')->name('admin.teacher.edit');
    Route::post('/teacher-update/{id}','AdminController@teacherUpdate')->name('admin.teacher.update');

    /**
     * Testimonial management
     */
    Route::get('/testimonial','AdminController@testimonial')->name('admin.testimonial');
    Route::post('/testimonial-store','AdminController@testimonialStore')->name('admin.testimonial.store');
    Route::get('/testimonial-delete/{id}','AdminController@testimonialDestroy')->name('admin.testimonial.delete');




    Route::get('/mailbox','AdminController@mailbox')->name('admin.mailbox');
    Route::get('/compose','AdminController@compose')->name('admin.compose');
    Route::get('/readmail','AdminController@readmail')->name('admin.readmail');
    Route::get('/bcalender','AdminController@bcalender')->name('admin.bcalender');
    Route::get('/lcalender','AdminController@lcalender')->name('admin.lcalender');
    Route::get('/bookmark','AdminController@bookmark')->name('admin.bookmark');
    Route::get('/review','AdminController@review')->name('admin.review');
    Route::get('/listing','AdminController@listing')->name('admin.listing');
    Route::get('/profile','AdminController@profile')->name('admin.profile');
    Route::get('/permission','AdminController@permission')->name('admin.permission');
    Route::post('/store','AdminController@store')->name('admin.store');
//    Route::get('/show/{id}','AdminController@show')->name('admin.show');

    /// route for set roles and permissions ///
    Route::resource('roles','RolesController');
    /// route for set user and role ///
    Route::resource('users','UsersController');
    Route::get('/guest-users','UsersController@guestUser')->name('users.guest');

});

Route::resource('quiz','QuizController');
Route::resource('examinfo','ExaminfoController');
Route::resource('makequestion' , 'QuestionController');
Route::resource('student','StudentController');
Route::resource('answer','AnswerController');
Route::resource('result' , 'ResultController');



}); // end prevent back middleware






















