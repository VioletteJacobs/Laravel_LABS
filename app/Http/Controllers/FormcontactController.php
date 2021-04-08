<?php

namespace App\Http\Controllers;

use App\Models\Formcontact;
use Illuminate\Http\Request;

class FormcontactController extends Controller
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
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function show(Formcontact $formcontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Formcontact $formcontact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formcontact $formcontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formcontact  $formcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formcontact $formcontact)
    {
        //
    }
}
