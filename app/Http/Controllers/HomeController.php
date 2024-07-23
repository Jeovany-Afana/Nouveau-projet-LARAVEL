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
      return view('login');
    }

/**
*

 * @return void
 */
    public function inscription_responsable()
    {
      return view('inscription_responsable');
    }

/**
 * @return void
 */
    public function liste_responsables()
    {
      return view('liste_responsables_classe');
    }

    public function inscription_prof()
    {
      return view('inscription_prof');
    }

    public function liste_prof()
    {
      return view('liste_prof');
    }

    public function profile_responsable()
    {
      return view('profile_responsable');
    }

    public function profile_prof()
    {
      return view('profile_prof');
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
