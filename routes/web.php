<?php

use App\Models\Aboutwelcome;
use App\Models\Address;
use App\Models\Cardwelcome;
use App\Models\Carrousel;
use App\Models\Ceo;
use App\Models\Contactsection;
use App\Models\Email;
use App\Models\Footer;
use App\Models\Introservice;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Map;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\Phone;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Servicenew;
use App\Models\Serviceswelcome;
use App\Models\Servicevip;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Titresservice;
use App\Models\Titreswelcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $loader = Loader::all();
    $nav = Navbar::all();
    $carrousel = Carrousel::all();
    $cardwelcome = Cardwelcome::all();
    $carrousel = Carrousel::all();
    $logo = logo::all();
    $titrewelcome = Titreswelcome::all();
    $services = Service::all();

    $carrousel = Carrousel::all();
    $about = Aboutwelcome::all();

    $team = Team::all();
    $Ceo = Ceo::all();
    $teamRight = $team->shuffle();
    $teamLeft =$team->shuffle();

    $testimonials = Testimonials::all();
    $ready = Ready::all();

    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();

    $footer = Footer::all();


    return view('welcome', compact("loader","nav", "carrousel", "cardwelcome", "carrousel", "logo", "services", "about", "team", "Ceo", "teamRight", "teamLeft", "testimonials", "titrewelcome", "ready", "contactSection", "address", "phone", "email", "footer"));
});


Route::get('/services', function () {
    
    $loader = Loader::all();
    $nav = Navbar::all();

    $introService = Introservice::all();
    $titresService =Titresservice::all();
    $services = Service::all();

    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();

    $newsletter = Newsletter::all();
    $footer = Footer::all();
    return view('pages.front.services', compact("loader", "nav",  "introService", "titresService", "services","footer" , "contactSection", "address", "phone", "email","newsletter", "footer"));
});


Route::get('/blog', function () {
    $loader = Loader::all();
    $nav = Navbar::all();

    $newsletter = Newsletter::all();
    $footer = Footer::all();
    return view('pages.front.blog', compact("loader", "nav", "newsletter","footer"));
});


Route::get('/contact', function () {
    $loader = Loader::all();
    $nav = Navbar::all();

    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();

    $map = Map::all();

    $footer = Footer::all();
    return view('pages.front.contact', compact("loader", "nav", "footer" , "contactSection", "address", "phone", "email", "map", "footer"));
});



Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
