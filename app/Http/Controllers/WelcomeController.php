<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use App\Models\Aboutwelcome;
use App\Models\Address;
use App\Models\Cardwelcome;
use App\Models\Carrousel;
use App\Models\Ceo;
use App\Models\Contactsection;
use App\Models\Email;
use App\Models\Footer;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\Newsletter as ModelsNewsletter;
use App\Models\Phone;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Titreswelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $loader = Loader::all();
    $nav = Navbar::all();
    $carrousel = Carrousel::all();
    $cardwelcome = Cardwelcome::all();
    $carrousel = Carrousel::all();
    $logo = logo::first();
    $titrewelcome = Titreswelcome::all();
    $services = Service::all();

    // $carrousel = Carrousel::all();
    $about = Aboutwelcome::all();

    $team = Team::all();



    $testimonials = Testimonials::orderBy("id", "desc")->limit(6)->get();
    $newsletter = ModelsNewsletter::first();

    $subject= Subject::all();
    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();

    $footer = Footer::first();


    return view('welcome', compact("loader","nav", "carrousel", "cardwelcome", "carrousel", "logo", "services", "about", "team", "testimonials", "titrewelcome", "newsletter", "contactSection", "subject", "address", "phone", "email", "footer"));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
