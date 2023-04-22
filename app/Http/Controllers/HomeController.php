<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

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
        return view('home')->with([
            'masters'      => $masters
        ]);
    }
    public function telechargerListeDesCandidats($id){
        $master     = Master::find($id) ;
        view()->share([
            'master'  => $master
        ]);
        $pdf = PDF::loadView('master.liste-candidats',[
            'master'  => $master
        ]);
        return $pdf->download($master->title.".pdf");
    }
}
