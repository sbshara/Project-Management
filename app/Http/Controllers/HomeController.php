<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

	private $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
		
    public function __construct(Request $request)
    {
		$this->$request = $request;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		// dd($request);
        return view('home', compact('request'));
    }
}
