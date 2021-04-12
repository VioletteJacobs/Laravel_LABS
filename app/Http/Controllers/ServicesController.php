<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use App\Models\Address;
use App\Models\Contactsection;
use App\Models\Email;
use App\Models\Footer;
use App\Models\Formcontact;
use App\Models\Introservice;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\Newsletter as ModelsNewsletter;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Titresservice;
use App\Models\Titreswelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
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
        $logo = logo::first();
    
    
        $titresServices = Titresservice::all();
        $titreUnService = greenTitle($titresServices[0]);
        $titreDeuxService = greenTitle($titresServices[1]);
    
      
    
    
    

    
    
        $intro = Introservice::all();
        $titresService =Titresservice::all();
        $services = Service::orderBy("id", "DESC")->paginate(9);
    
        $lastservices =  Service::orderBy("id", "desc")->limit(6)->get();
    
        
        $posts = Post::orderBy("id", "desc")->limit(3)->get();
        
    
        $formContact = Formcontact::first();
        $subject= Subject::all();
        $contactSection = Contactsection::all();
        $address = Address::all();
        $phone = Phone::all();
        $email = Email::all();
    
        $newsletter = ModelsNewsletter::first();
        $footer = Footer::first();
        return view('pages.front.services', compact("loader", "nav",  "logo", "intro", "titreUnService", "titreDeuxService", "services", "lastservices", "posts", "footer" , "contactSection", "address", "phone", "subject", "email","newsletter", "footer"));
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
