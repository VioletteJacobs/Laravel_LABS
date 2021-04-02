<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.back.create.welcome.createTeam");
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
		    "photo" => 'required |min:2|max:300',
            "name" => 'required|min:2|max:50',
            "firstname" => 'required|min:2|max:50',
            "fonction" => 'required|min:2|max:50',

        ]);
        $update = new Team;
        Storage::delete("public/img/team/".$update->photo);
        Storage::put("public/img/team", $request->photo);
        $update->photo = $request->photo;
        $update->name = $request->name;
        $update->firstname = $request->firstname;
        $update->fonction = $request->fonction;

        $update->save();

        return redirect("/welcomeB");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $edit = $team;
        return view("pages.back.edit.welcome.editTeam", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $validation = $request->validate([
		    // "photo" => 'required |min:2|max:300',
            "name" => 'required|min:2|max:50',
            "firstname" => 'required|min:2|max:50',
            "fonction" => 'required|min:2|max:50',

        ]);
        $update = $team;
        $update->photo = $request->photo;
        $update->name = $request->name;
        $update->firstname = $request->firstname;
        $update->fonction = $request->fonction;

        $update->save();

        return redirect("/welcomeB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect("/welcomeB");
    }
}
