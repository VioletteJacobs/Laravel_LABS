<?php

namespace App\Http\Controllers;

use App\Models\Cardwelcome;
use Illuminate\Http\Request;

class CardwelcomeController extends Controller
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
     * @param  \App\Models\Cardwelcome  $cardwelcome
     * @return \Illuminate\Http\Response
     */
    public function show(Cardwelcome $cardwelcome)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cardwelcome  $cardwelcome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Cardwelcome::find($id);
        // dd($edit);
        return view("pages.back.edit.welcome.editCardwelcome", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cardwelcome  $cardwelcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
		    "icone" => 'required |min:1|max:500',
            "title" => 'required|min:1|max:100',
            "p" => 'required|min:1',
        ]);

        $update = Cardwelcome::find($id);
        $update->icone = $request->icone;
        $update->title = $request->title;
        $update->p = $request->p;
        $update->save();

        return redirect("/welcomeB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cardwelcome  $cardwelcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cardwelcome $cardwelcome)
    {
        //
    }
}
