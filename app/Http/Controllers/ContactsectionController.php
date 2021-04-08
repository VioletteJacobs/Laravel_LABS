<?php

namespace App\Http\Controllers;

use App\Models\Contactsection;
use Illuminate\Http\Request;

class ContactsectionController extends Controller
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
     * @param  \App\Models\Contactsection  $contactsection
     * @return \Illuminate\Http\Response
     */
    public function show(Contactsection $contactsection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactsection  $contactsection
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactsection $contactsection)
    {
        $edit= $contactsection;
        return view("pages.back.edit.contact.editContactsection", compact("edit"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactsection  $contactsection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactsection $contactsection)
    {
        $validation = $request->validate([
		    // "photo" => 'required |min:2|max:300',
            "title" => 'required|min:2|max:50',
            "p" => 'required|min:2',
            "title2" => 'required|min:2|max:50',

        ]);
        $update = $contactsection;

        $update->title = $request->title;
        $update->p = $request->p;
        $update->title2 = $request->title2;

        $update->save();

        return redirect("/contactB");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactsection  $contactsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactsection $contactsection)
    {
        //
    }
}
