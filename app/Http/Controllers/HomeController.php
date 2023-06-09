<?php

namespace App\Http\Controllers;

use App\Exports\CandidatsDataExport;
use Maatwebsite\Excel\Facades\Excel;
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
    public function telechargerListeDesCandidatsEXCEL($id){
        $master = Master::findOrFail($id);
        $filename = 'candidats-' . $master->title . '.xlsx';
    
        return Excel::download(new CandidatsDataExport($master), $filename);
        
    }
    
    
    
    
    
    
    
    
    }
