<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class LogoController extends Controller
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
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(logo $logo)
    {
        $edit = $logo;
        return view("pages.back.edit.all.editLogo", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logo $logo)
    {
        $validation = $request->validate([
            "url" => 'required',

        ]);
        $update = $logo;
        // Storage::delete("public/img/".$update->url);
        Storage::put("public/img", $request->url);
        $update->url = $request->file("url")->hashName();
        $img = Image::make('storage/img/'.$update->url)
        ->resize(100,80);
        $img->save('img/logo-xs/xs-logo.jpeg');

        $update->save();
        return redirect("/mainB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(logo $logo)
    {
        //
    }
}
