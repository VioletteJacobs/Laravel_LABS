<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        return view("pages.back.create.welcome.createService");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
		    "icon" => 'required |min:2|max:100',
            "title" => 'required|min:2|max:100',
            "p" => 'required|min:2|max:500',

        ]);

        $update = new Service;;
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->p = $request->p;

        $update->save();

        return redirect("/welcomeB");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $edit = $service;
        return view("pages.back.edit.welcome.editService", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validation = $request->validate([
		    "icon" => 'required |min:2|max:100',
            "title" => 'required|min:2|max:100',
            "p" => 'required|min:2|max:500',

        ]);
        $update = $service;
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->p = $request->p;

        $update->save();

        return redirect("/welcomeB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect("/welcomeB");
    }
}
