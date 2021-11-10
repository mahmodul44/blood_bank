<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function admin(){
//        return view('auth.login');
//    }

    public function index()
    {
        return view('layouts.dashboard');
    }
    public function bloodadd(){
        return view('layouts.pages.bloodadd');
    }
    public function profile(){
        return view('layouts.pages.profile');
    }
    public function user_edit($id){
        $user=new User();
        return view('layout.pages.index');
    }
    public function profile_edit(){
        return view('layouts.pages.profile_edit');
    }
    public function dashboard_admin(){
        return view('layouts.dashboard');
    }



}
