<?php

namespace App\Http\Controllers;

use App\Models\Loader;
use Illuminate\Http\Request;

class LoaderController extends Controller
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
     * @param  \App\Models\Loader  $loader
     * @return \Illuminate\Http\Response
     */
    public function show(Loader $loader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loader  $loader
     * @return \Illuminate\Http\Response
     */
    public function edit(Loader $loader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loader  $loader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loader $loader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loader  $loader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loader $loader)
    {
        //
    }
}
