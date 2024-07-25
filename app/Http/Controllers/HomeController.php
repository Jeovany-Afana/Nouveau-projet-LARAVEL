<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $name = 'OUSMANE';
        return view('index', compact('name'));
    }

    public function login()
    {
      return view('pages.login');
    }

/**
*

 * @return void
 */
    public function inscription_responsable()
    {
      return view('Students_Interfaces.inscription_responsable');
    }

/**
 * @return void
 */
    public function liste_responsables()
    {
      return view('Admin.liste_responsables_classe');
    }

    public function inscription_prof()
    {
      return view('Teacheri_Interfaces.inscription_prof');
    }

    public function liste_prof()
    {
      return view('Admin.liste_prof');
    }

    public function profile_responsable()
    {
      return view('Students_Interfaces.profile_responsable');
    }

    public function profile_prof()
    {
      return view('Teacher_Interfaces.profile_prof');
    }

    public function affiche_fiche()
      {
        return view('Interfaces_Fiches.affiche_fiche');
      }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
