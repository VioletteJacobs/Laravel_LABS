<?php

namespace App\Http\Controllers;

use App\Models\Titresservice;
use Illuminate\Http\Request;

class TitresserviceController extends Controller
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
     * @param  \App\Models\Titresservice  $titresservice
     * @return \Illuminate\Http\Response
     */
    public function show(Titresservice $titresservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titresservice  $titresservice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Titresservice::find($id);
        return view("pages.back.edit.services.editTitresservice", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titresservice  $titresservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([

            "title" => 'required|min:2|max:100',


        ]);
        $update = Titresservice::find($id);
        $update->title = $request->title;


        $update->save();

        return redirect("/serviceB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titresservice  $titresservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titresservice $titresservice)
    {
        //
    }
}
