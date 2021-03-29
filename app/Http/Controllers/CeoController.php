<?php

namespace App\Http\Controllers;

use App\Models\Ceo;
use Illuminate\Http\Request;

class CeoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function show(Ceo $ceo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ceo $ceo)
    {
        $edit = $ceo;
        return view("pages.back.edit.welcome.editCeo", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ceo $ceo)
    {
        $validation = $request->validate([
		    // "photo" => 'required |min:2|max:300',
            "name" => 'required|min:2|max:50',
            "firstname" => 'required|min:2|max:50',
            "fonction" => 'required|min:2|max:50',

        ]);
        $update = $ceo;
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
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ceo $ceo)
    {
        //
    }
}
