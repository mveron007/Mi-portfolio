<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Countries;

class HomeController extends Controller
{

  public function countries()

    {

        $countries = Countries::all();

        return view('countries',compact('countries'));

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


}
