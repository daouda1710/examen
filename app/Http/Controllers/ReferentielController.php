<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use Illuminate\Http\Request;

class ReferentielController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $referentiels = Referentiel::withCount('formations')->get();
        return view('nombre');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('formation',['referentiel' => Referentiel::find($id)]);
      
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Referentiel $referentiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referentiel $referentiel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referentiel $referentiel)
    {
        //
    }
}
