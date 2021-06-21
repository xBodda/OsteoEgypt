<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Branch;
use App\Models\AppointmentType;
use App\Models\User;
use App\Models\Link;

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

    public function terms()
    {
        return view('pages.terms');
    }

    public function signup()
    {
        return view('pages.signup');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function contact()
    {
        $countries = DB::table('locations')->get();

        return view('pages.contact')->with('countries',$countries);
    }

    public function sendMessage(Request $REQUEST) 
    {
        $contact = new Contact();

        $contact->fullname = $REQUEST->fullname;
        $contact->email = $REQUEST->email;
        $contact->phonenumber = $REQUEST->phonenumber;
        $contact->message = $REQUEST->message;

        $contact->save();

        return redirect()->route('home');
    }

    public function addNewPage()
    {
        $sections = DB::table('sections')->get();

        return view('pages.control.add-page')->with('sections',$sections);
    }

    public function addPage(Request $REQUEST)
    {
        $page = new Page();

        $page->section = $REQUEST->section;
        $page->page_name = $REQUEST->pageName;

        $page->save();

        $contents = 'New Page Added';
        file_put_contents(dirname(__FILE__).'../../../../resources/views/pages/'.$page->page_name.'.blade.php', $contents);

        return redirect()->route('control');
    }

    public function bookOnSpot() {
        $branches = Branch::get();
        $types = AppointmentType::get();
        $doctors = User::where('user_type','=',2)->get();
        
        $data = [
                "branches"=>$branches,
                "types"=>$types,
                "doctors"=>$doctors];


        return view('pages.control.book-on-spot', $data);
    }

    public function socialLinks() {
        $links = Link::first();

        return view('pages.control.social-links')->with('links',$links);
    }

    public function saveLinks(Request $REQUEST)
    {
        $link = new Link();

        $link->facebook = $REQUEST->facebook;
        $link->instagram = $REQUEST->instagram;
        $link->linkedin = $REQUEST->linkedin;
        $link->twitter = $REQUEST->twitter;
        $link->youtube = $REQUEST->youtube;

        $link->save();

        return redirect()->route('control');
    }

}
