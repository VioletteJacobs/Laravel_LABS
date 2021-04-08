<?php

namespace App\Http\Controllers;

use App\Models\Aboutwelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutwelcomeController extends Controller
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
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutwelcome  $aboutwelcome
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutwelcome $aboutwelcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutwelcome  $aboutwelcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutwelcome $aboutwelcome)
    {
        $edit = $aboutwelcome;
        return view("pages.back.edit.welcome.editIntro", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutwelcome  $aboutwelcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutwelcome $aboutwelcome)
    {
        $validation = $request->validate([
		    "para_right" => 'required |min:2|max:500',
            "para_left" => 'required|min:2|max:500',
            "btn_content" => 'required|min:2|max:100',
            "img" => "required",
            "video_href" => 'required|min:2',
        ]);
        $update = $aboutwelcome;
        $update->para_right = $request->para_right;
        $update->para_left = $request->para_left;
        Storage::delete("public/img/".$update->img);
        Storage::put("public/img", $request->img);
        $update->img = $request->file("img")->hashName();
        $update->btn_content = $request->btn_content;
        $update->video_href = $request->video_href;
        $update->save();

        return redirect("/welcomeB");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutwelcome  $aboutwelcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutwelcome $aboutwelcome)
    {
        //
    }
}
