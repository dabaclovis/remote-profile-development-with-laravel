<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->orderBy('id','desc')->paginate(10);
        return view('pages.index',[
            'users' => $users,
        ]);
    }
}
