<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Link;
use App\Models\Section;
use View;
use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $linkss = Link::first();
        $navSections = Section::with('page')->get();
        // dd($navSections);
        // var_dump($navSections);
        View::share('linkss', $linkss);
        View::share('navSections', $navSections);
    }
}
