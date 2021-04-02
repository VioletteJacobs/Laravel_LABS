<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialsController extends Controller
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
        return view("pages.back.create.welcome.createTestimonial");
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
		    "p" => 'required |min:1',
            "name" => 'required|min:1|max:200',
            "firstname" => 'required|min:1|max:200',
            "fonction" => 'required|min:1|max:200',
        ]);
        
        $newEntry = new Testimonials;
        $newEntry->p = $request->p;
        $newEntry->name = $request->name;
        Storage::put("public.img/", $request->file("photo"));
        $newEntry->photo = $request->file("photo")->hashName();
        $newEntry->firstname = $request->firstname;
        $newEntry->fonction = $request->fonction;

        $newEntry->save();
        return redirect("/welcomeB");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Testimonials::find($id);
        return view("pages.back.edit.welcome.editTestimonials", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
		    "p" => 'required |min:1',
            "name" => 'required|min:1|max:200',
            "firstname" => 'required|min:1|max:200',
            "fonction" => 'required|min:1|max:200',
            "photo" => "required",
        ]);

        $update = Testimonials::find($id);
        $update->p = $request->p;
        $update->name = $request->name;
        Storage::delete("public/img/avatar".$update->photo);
        Storage::put("public/img/avatar", $request->photo);
        $update->photo = $request->file("photo")->hashName();
        $update->firstname = $request->firstname;
        $update->fonction = $request->fonction;
        $update->save();

        return redirect("/welcomeB");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Testimonials::find($id);
        
        // Storage::delete("public/img/".$destroy->photo);
        $destroy->delete();

        return redirect("/welcomeB");
    }
}
