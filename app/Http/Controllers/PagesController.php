<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.index');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function signup()
    {
        return view('pages.signup');
    }

    public function contact()
    {
        $countries = DB::table('locations')->get();

        return view('pages.contact')->with('countries',$countries);
    }

}
