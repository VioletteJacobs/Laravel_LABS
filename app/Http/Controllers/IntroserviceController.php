<?php

namespace App\Http\Controllers;

use App\Models\Introservice;
use Illuminate\Http\Request;

class IntroserviceController extends Controller
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
     * @param  \App\Models\Introservice  $introservice
     * @return \Illuminate\Http\Response
     */
    public function show(Introservice $introservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Introservice  $introservice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Introservice::find($id);
        return view("pages.back.edit.services.editIntroservice", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Introservice  $introservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
		    "home" => 'required |min:2|max:100',
            "title" => 'required|min:2|max:100',
            "service" => 'required|min:2|max:500',

        ]);
        $update = Introservice::find($id);
        $update->home = $request->home;
        $update->title = $request->title;
        $update->service = $request->service;

        $update->save();

        return redirect("/serviceB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Introservice  $introservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introservice $introservice)
    {
        //
    }
}
