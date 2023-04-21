<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
        $nbCandidature="";
        $nbCandidatureFEMME="";
        $nbCandidatureHOMME="";
        $nbFonctionnaire="";
        $masters      = Auth::user()->masters()->get();
        foreach($masters as $master){
            
        }
        return view('home')->with([
            'masters'      => $masters
        ]);
    }
}
