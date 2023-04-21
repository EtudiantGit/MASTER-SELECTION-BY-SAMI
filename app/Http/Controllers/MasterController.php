<?php

namespace App\Http\Controllers;
use App\Models;
use App\Http\Requests\CreateMasterRequest;
use App\Models\Departement;
use App\Models\Master;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = Departement::all();
        $types        = Type::all();
        return view('master.create')->with([
            'departements' => $departements,
            'types'        => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMasterRequest $request)
    {
        $user = Auth::user();
        $master = $user->masters()->create($request->validated());
        $request->session()->flash('status', 'Master Ajouté avec succès');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        $this->authorize('update',$master);
        $departements = Departement::all();
        $types        = Type::all();
        return view('master.edit')->with([
            'departements' => $departements,
            'types'        => $types,
            'master'       => $master
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMasterRequest $request, Master $master)
    {
        $this->authorize('update',$master);
        $master->update($request->validated());
        $request->session()->flash('status', 'Master Modifié avec succès');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        $this->authorize('delete',$master);
        Master::destroy($master->id);
        return redirect()->route('home')->with('error','Master Supprimé');
    }
}
