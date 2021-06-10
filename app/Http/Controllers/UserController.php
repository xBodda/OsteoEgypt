<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users_table()
    {
        return view('pages.control.view-users',[
            'users' => DB::table('users')->paginate(15)
        ]);
    }
}
