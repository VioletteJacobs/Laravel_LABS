<?php

namespace App\Http\Controllers;

use App\Models\Titreswelcome;
use Illuminate\Http\Request;

class TitreswelcomeController extends Controller
{
    public function __construct(){
        $this->middleware(["auth", "isWebmaster"]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titreswelcome  $titreswelcome
     * @return \Illuminate\Http\Response
     */
    public function show(Titreswelcome $titreswelcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titreswelcome  $titreswelcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Titreswelcome $titreswelcome)
    {
        $edit = $titreswelcome;
        return view ("pages.back.edit.welcome.editTitres", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titreswelcome  $titreswelcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titreswelcome $titreswelcome)
    {
        $validation = $request->validate([
		    "title" => 'required |min:1',

        ]);
        $update = $titreswelcome;
        $update->title = $request->title;
        $update->save();
        return redirect("/welcomeB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titreswelcome  $titreswelcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titreswelcome $titreswelcome)
    {
        //
    }
}
