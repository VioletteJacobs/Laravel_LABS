<?php

use App\Models\Aboutwelcome;
use App\Models\Cardwelcome;
use App\Models\Carrousel;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\Ready;
use App\Models\Serviceswelcome;
use App\Models\Team;
use App\Models\Testimonials;
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
    $servicewelcome = Serviceswelcome::all();
    $about = Aboutwelcome::all();
    $team = Team::all();
    $testimonials = Testimonials::all();
    $ready = Ready::all();

    return view('welcome', compact("loader","nav", "carrousel", "cardwelcome", "carrousel", "logo", "servicewelcome", "about", "team", "testimonials", "titrewelcome", "ready"));
});
Route::get('/services', function () {
    $loader = Loader::all();
    $nav = Navbar::all();
    return view('pages.front.services', compact("loader", "nav"));
});
Route::get('/blog', function () {
    $loader = Loader::all();
    $nav = Navbar::all();
    return view('pages.front.blog', compact("loader", "nav"));
});
Route::get('/contact', function () {
    $loader = Loader::all();
    $nav = Navbar::all();
    return view('pages.front.contact', compact("loader", "nav"));
});



Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
