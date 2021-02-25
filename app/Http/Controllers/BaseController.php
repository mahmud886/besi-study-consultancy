<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
     public function index()
    {
        return view('home');
    }

    //why study abroad

     public function guide_to_study()
    {
        return view('pages.why-study-abroad.guide-to-study-abroad');
    }
    public function study_abroad_benefits()
    {
        return view('pages.why-study-abroad.study-abroad-benefits');
    }
    public function why_study_abroad()
    {
        return view('pages.why-study-abroad.study-abroad-benefits');
    }

    //explore countries

    public function study_in_australia()
    {
        return view('pages.explore-countries.study-in-australia');
    }
     public function study_in_canada()
    {
        return view('pages.explore-countries.study-in-canada');
    }
    public function study_in_uk()
    {
        return view('pages.explore-countries.study-in-uk');
    }

    //find course
    public function choose_course()
    {
        return view('pages.find-course.choose-course');
    }
    public function find_university()
    {
        return view('pages.find-course.find-university');
    }
    public function university_ranking()
    {
        return view('pages.find-course.university-ranking');
    }

    //what we do
    public function free_counselling()
    {
        return view('pages.what-we-do.free-counselling-sessions');
    }
    public function pre_depature_support()
    {
        return view('pages.what-we-do.pre-depature-support');
    }
    public function visa_app_assistance()
    {
        return view('pages.what-we-do.visa-app-assistance');
    }

    //ielts
     public function book_ielts_test()
    {
        return view('pages.ielts.book-ielts-test');
    }
     public function computer_deliverd_ielts()
    {
        return view('pages.ielts.computer-delivered-ielts');
    }
     public function ielts_with_besi()
    {
        return view('pages.ielts.ielts-with-besi');
    }

    //living abroad
    public function dealing_with_stress()
    {
        return view('pages.living-abroad.dealing-with-stress');
    }
    public function study_tips()
    {
        return view('pages.living-abroad.study-tips');
    }
    public function what_to_pack()
    {
        return view('pages.living-abroad.what-to-pack');
    }

}
