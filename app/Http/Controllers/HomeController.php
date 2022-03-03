<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function blogs()
    {
        return view('pages.blogs');
    }
    public function blogDetails()
    {
        return view('pages.blog-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
