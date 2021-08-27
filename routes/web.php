<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes(['register' => false]);

Route::get('', 'PageController@index')->name('home');
Route::get('/test', 'ç@test')->name('test');
//Route::get('/projects', 'PageController@projects')->name('projects');
Route::get('/story', 'PageController@story')->name('story');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/new', 'PageController@contactSubmit')->name('contactSubmit');
Route::get('/resource', 'PageController@resource')->name('resource');
Route::get('/resource/{slug}', 'PageController@resourceShow')->name('resourceShow');
Route::post('/resources/download', 'PageController@resourceDownload')->name('resourceDownload');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'DashbodardController@dashboard')->name('AdminDashboard');
    Route::get('/mystory-dashboard', 'DashboardController@mystoryDashboard')->name('mystoryDashboard'); 

    Route::get('/post/new', 'PostController@createPost')->name('createPost');
    Route::post('/post/new', 'PostController@createPostSubmit')->name('createPostSubmit'); 
    Route::get('/posts', 'PostController@posts')->name('posts'); 
    Route::get('/post/{id}/edit','PostController@editPosts')->name('EditPosts');
    Route::post('/post/{id}/edit','PostController@postEditPosts')->name('PostEditPosts');
    Route::post('/post/{id}/delete','PostController@postDelete')->name('PostDelete');

    Route::get('/massage', 'DashboardController@massage')->name('massage'); 
    Route::post('/massage/{id}/delete','DashboardController@massageDelete')->name('massageDelete');

    Route::get('/according/new', 'AccordingController@createAccording')->name('createAccording');
    Route::post('/according/new', 'AccordingController@createAccordingSubmit')->name('createAccordingSubmit'); 
    Route::get('/accordings', 'AccordingController@Accordings')->name('Accordings'); 
    Route::get('/according/{id}/edit','AccordingController@editAccordings')->name('EditAccordings');
    Route::post('/according/{id}/edit','AccordingController@AccordingEditPosts')->name('AccordingEditPosts');
    Route::post('/according/{id}/delete','AccordingController@AccordingDelete')->name('AccordingDelete');
  
    Route::get('/feedback/new', 'FeedbackController@createFeedback')->name('createFeedback');
    Route::post('/feedback/new', 'FeedbackController@createFeedbackSubmit')->name('createFeedbackSubmit'); 
    Route::get('/feedbacks', 'FeedbackController@feedbacks')->name('feedbacks'); 
    Route::get('/feedback/{id}/edit','FeedbackController@editFeedbacks')->name('EditFeedbacks');
    Route::post('/feedback/{id}/edit','FeedbackController@FeedbackEditPosts')->name('FeedbackEditPosts');
    Route::post('/feedback/{id}/delete','FeedbackController@feedbackDelete')->name('feedbackDelete');

    Route::get('setting','DashboardController@setting')->name('userProfiles');
    Route::post('setting','DashboardController@settingPost')->name('userProfilePost');

    Route::get('/homeposts','HomePostController@HomePostIndex')->name('homePostIndex');
    Route::post('/homeposts/create','HomePostController@HomePostCreate')->name('homePostCreate');
    Route::post('/homeposts/update','HomePostController@HomePostUpdate')->name('homePostUpdate');
    Route::post('/homeposts/{id}/delete','HomePostController@destroy')->name('homePostDelete');

    Route::get('/education-dash/new', 'EducationController@createPost')->name('createEducation');
    Route::post('/education-dash/new', 'EducationController@createPostSubmit')->name('createEducationSubmit'); 
    Route::get('/education-dash', 'EducationController@posts')->name('Educations'); 
    Route::get('/education-dash/{id}/edit','EducationController@editPosts')->name('EditEducation');
    Route::post('/education-dash/{id}/edit','EducationController@postEditPosts')->name('PostEditEducation');
    Route::post('/education-dash/{id}/delete','EducationController@postDelete')->name('EducationDelete');

    Route::get('/design-talk-dash/new', 'DesignTalkController@createPost')->name('createDesignTalk');
    Route::post('/design-talk-dash/new', 'DesignTalkController@createPostSubmit')->name('createDesignTalkSubmit'); 
    Route::get('/design-talk-dash', 'DesignTalkController@posts')->name('DesignTalks'); 
    Route::get('/design-talk-dash/{id}/edit','DesignTalkController@editPosts')->name('EditDesignTalk');
    Route::post('/design-talk-dash/{id}/edit','DesignTalkController@postEditPosts')->name('PostEditDesignTalk');
    Route::post('/design-talk-dash/{id}/delete','DesignTalkController@postDelete')->name('DesignTalkDelete');

    Route::get('/Distinction-dash/new', 'DistinctionController@createPost')->name('createDistinction');
    Route::post('/Distinction-dash/new', 'DistinctionController@createPostSubmit')->name('createDistinctionSubmit'); 
    Route::get('/Distinction-dash', 'DistinctionController@posts')->name('Distinctions'); 
    Route::get('/Distinction-dash/{id}/edit','DistinctionController@editPosts')->name('EditDistinction');
    Route::post('/Distinction-dash/{id}/edit','DistinctionController@postEditPosts')->name('PostEditDistinction');
    Route::post('/Distinction-dash/{id}/delete','DistinctionController@postDelete')->name('DistinctionDelete');

    Route::get('/resources','ResourceController@resources')->name('resourcePosts');
    Route::get('/resource/{id}/edit','ResourceController@editResource')->name('editResources');
    Route::post('/resource/{id}/edit','ResourceController@editResourcePost')->name('editResourcePost');
    Route::post('/resource/{id}/delete','ResourceController@deleteResource')->name('deleteResource');
    Route::get('/resource/new','ResourceController@newResource')->name('newResource');
    Route::post('/resource/new','ResourceController@createResource')->name('createResource');

    Route::resource('tag','TagController',['except'=>['update']]);
    Route::post('/tag/update','TagController@update')->name('TagUpdate');
    Route::post('/tag/{id}/delete','TagController@destroy')->name('TagDestroy');
});
?>