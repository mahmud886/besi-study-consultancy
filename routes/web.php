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
Route::get('/', 'BaseController@index')->name('home');


//why study abroad
Route::get('/guide-to-study', 'BaseController@guide_to_study')->name('guide_to_study');
Route::get('/study-abroad-benefits', 'BaseController@study_abroad_benefits')->name('study_abroad_benefits');
Route::get('/why-study-abroad', 'BaseController@why_study_abroad')->name('why_study_abroad');
//explore countries
Route::get('/study-in-australia', 'BaseController@study_in_australia')->name('study_in_australia');
Route::get('/study-in-canada', 'BaseController@study_in_canada')->name('study_in_canada');
Route::get('/study-in-uk', 'BaseController@study_in_uk')->name('study_in_uk');
//find course
Route::get('/choose-course', 'BaseController@choose_course')->name('choose_course');
Route::get('/find-university', 'BaseController@find_university')->name('find_university');
Route::get('/university-ranking', 'BaseController@university_ranking')->name('university_ranking');
//what we do
Route::get('/free-counselling', 'BaseController@free_counselling')->name('free_counselling');
Route::get('/pre-depature-support', 'BaseController@pre_depature_support')->name('pre_depature_support');
Route::get('/visa-app-assistance', 'BaseController@visa_app_assistance')->name('visa_app_assistance');
//ielts
Route::get('/book-ielts-test', 'BaseController@book_ielts_test')->name('book_ielts_test');
Route::get('/computer-deliverd-ielts', 'BaseController@computer_deliverd_ielts')->name('computer_deliverd_ielts');
Route::get('/ielts-with-besi', 'BaseController@ielts_with_besi')->name('ielts_with_besi');
//living abroad
Route::get('/dealing-with-stress', 'BaseController@dealing_with_stress')->name('dealing_with_stress');
Route::get('/study-tips', 'BaseController@study_tips')->name('study_tips');
Route::get('/what-to-pack', 'BaseController@what_to_pack')->name('what_to_pack');

