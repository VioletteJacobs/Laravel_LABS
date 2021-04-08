<?php

use App\Http\Controllers\AboutwelcomeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CardwelcomeController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CeoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactsectionController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IntrocontactController;
use App\Http\Controllers\IntroserviceController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TitresserviceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Aboutwelcome;
use App\Models\Address;
use App\Models\Cardwelcome;
use App\Models\Carrousel;
use App\Models\Category;
use App\Models\Ceo;
use App\Models\Comment;
use App\Models\Contactsection;
use App\Models\Email;
use App\Models\Footer;
use App\Models\Formcontact;
use App\Models\Icon;
use App\Models\Introblog;
use App\Models\Introcontact;
use App\Models\Introservice;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Map;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Servicenew;
use App\Models\Serviceswelcome;
use App\Models\Servicevip;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\Titresservice;
use App\Models\Titreswelcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


// blade
// Route::get('/', function () {

//     $loader = Loader::all();
//     $nav = Navbar::all();
//     $carrousel = Carrousel::all();
//     $cardwelcome = Cardwelcome::all();
//     $carrousel = Carrousel::all();
//     $logo = logo::first();
//     $titrewelcome = Titreswelcome::all();
//     $services = Service::all();

//     $carrousel = Carrousel::all();
//     $about = Aboutwelcome::all();

//     $team = Team::all();
//     $Ceo = Ceo::all();


//     $testimonials = DB::table("testimonials")->orderBy("id", "desc")->limit(6)->get();
//     $newsletter = Newsletter::first();

//     $subject= Subject::all();
//     $contactSection = Contactsection::all();
//     $address = Address::all();
//     $phone = Phone::all();
//     $email = Email::all();

//     $footer = Footer::first();


//     return view('welcome', compact("loader","nav", "carrousel", "cardwelcome", "carrousel", "logo", "services", "about", "team", "Ceo", "testimonials", "titrewelcome", "newsletter", "contactSection", "subject", "address", "phone", "email", "footer"));
// });
Route::resource("/", WelcomeController::class);


Route::get('/services', function () {
    
    $loader = Loader::all();
    $nav = Navbar::all();
    $logo = logo::first();

    $introService = Introservice::all();
    $titresService =Titresservice::all();
    $services = Service::orderBy("id", "DESC")->paginate(9);

    $lastservices =  Service::orderBy("id", "desc")->limit(6)->get();

    
    $posts = DB::table("posts")->orderBy("id", "desc")->limit(3)->get();
    

    $formContact = Formcontact::first();
    $subject= Subject::all();
    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();

    $newsletter = Newsletter::first();
    $footer = Footer::first();
    return view('pages.front.services', compact("loader", "nav",  "logo", "introService", "titresService", "services", "lastservices", "posts", "footer" , "contactSection", "address", "phone", "subject", "email","newsletter", "footer"));
});


Route::get('/blog', function () {
    $loader = Loader::all();
    $nav = Navbar::all();
    
    $footer = Footer::first();
    $logo = logo::first();

    $intro = Introblog::all();

    $category = Category::all();
    $tag = Tag::all();
    $post = Post::orderBy("id", "DESC")->paginate(3);
    $postsValidate = $post->where("check", 1);

    $comments = Comment::all();
    $commentsvalidate = $comments->where("check", "=", 1);






    $newsletter = Newsletter::first();

    return view('pages.front.blog', compact("loader", "nav", "logo","intro","category", "tag", "post", "postsValidate", "comments", "commentsvalidate", "newsletter","footer"));
});

Route::get('/post/{$id}', function () {
    $loader = Loader::all();
    $nav = Navbar::all();
    $logo = logo::first();

    $intro = Introblog::all();

    $category = Category::all();
    $tag = Tag::all();
    $post = Post::all();


    $newsletter = Newsletter::first();
    $footer = Footer::first();

    return view('pages.front.blogpost', compact("loader", "nav", "logo","intro","category", "tag", "post", "newsletter","footer"));
});


Route::get('/contacter', function () {
    $loader = Loader::all();
    $nav = Navbar::all();
    $logo = logo::first();

    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();
    $subject= Subject::all();

    $map = Map::all();

    $footer = Footer::first();
    return view('pages.front.contact', compact("loader", "nav", "logo", "footer" , "contactSection", "subject", "address", "phone", "email", "map", "footer"));
});




Route::get('/welcomeB', function () {
    
    $loader = Loader::all();
    $nav = Navbar::all();
    $logo = logo::first();
    $services = Service::all();
    
    
    $titrewelcome = Titreswelcome::all();
    $carrousel = Carrousel::all();
    $cardwelcome = Cardwelcome::all();
    $about = Aboutwelcome::all();
    
    $team = Team::all();
    $ceo = Team::where("fonction","Ceo")->get();

    
    $testimonials = Testimonials::all();
    
    
    $newsletter = Newsletter::first();
    
    
    
    
    $footer = Footer::first();
    
    
    return view('pages.back.welcomeB', compact("loader","nav", "carrousel", "cardwelcome", "carrousel", "logo", "services", "about", "team", "ceo", "testimonials", "titrewelcome", "newsletter",  "footer"));
});

// Route::get("/contactB", function(){
    
//     $contactSection = Contactsection::all();
//     // $formContact = Formcontact::first();
//     $address = Address::all();
//     $phone = Phone::all();
//     $email = Email::all();
    
//     return view('pages.back.contactB', compact("contactSection", "address", "phone", "email"));
    
// });

Route::get("/mainB", function(){
    $loader = Loader::first();
    $nav = Navbar::all();
    $logo = logo::first();
    
    $newsletter = Newsletter::first();
    
    $footer = Footer::first();
    return view("pages.back.mainB", compact("loader", "logo", "nav", "newsletter", "footer"));
})->middleware(['auth', 'isWebmaster']);

Route::get("/serviceB", function(){
    
    $introService = Introservice::all();
    $titresService =Titresservice::all();
    $services = Service::all();
    $icon = Icon::all();
    
    return view("pages.back.serviceB", compact("introService", "titresService", "services", "icon"));
})->middleware(['auth', 'isWebmaster']);

Route::get("/blogB", function(){

    $category = Category::all();
    $tag = Tag::all();
    $post = Post::all();
    $postsValidate = $post->where("check", 1);
    
    
    
    return view("pages.back.blogB", compact("category", "tag", "post", "postsValidate"));
});

Route::get("/contactB", function(){
    
    
    $introContact = Introcontact::first();
    $map = Map::first();
    
    $contactSection = Contactsection::all();
    $address = Address::all();
    $phone = Phone::all();
    $email = Email::all();
    
    return view("pages.back.contactB", compact("introContact","map", "contactSection", "address", "phone", "email", ));
})->middleware(['auth', 'isWebmaster']);


// route ressource
Route::resource("logo", LogoController::class);
Route::resource("navbar", NavbarController::class);
Route::resource("newsletter", NewsletterController::class);
Route::resource("footer", FooterController::class);


Route::resource('cardWelcome', CardwelcomeController::class);
Route::resource("aboutwelcome", AboutwelcomeController::class);
Route::resource("testimonial", TestimonialsController::class);
Route::resource("carrousel", CarrouselController::class);
Route::resource("team", TeamController::class);
Route::resource('ceo', CeoController::class);
Route::resource('ready', ReadyController::class);


Route::resource("service", ServiceController::class);
Route::resource('titresService', TitresserviceController ::class);
Route::resource('introervice', IntroserviceController ::class);


Route::resource("post", PostController::class);
Route::resource("category", CategoryController::class);
Route::resource("tag", TagController::class);


Route::resource('introcontact', IntrocontactController ::class);
Route::resource('map', MapController::class);
Route::resource("contact", ContactsectionController::class);

Route::resource('map', MapController::class);
Route::resource("contactsection", ContactsectionController::class);
Route::resource("address", AddressController::class);
Route::resource("email", EmailController::class);
Route::resource('phone', PhoneController::class);

Route::resource("userB", UserController::class);
Route::resource('commentB', CommentController::class);



// approbation par l'admin
Route::get("/validate/{id}", [UserController::class, "validation"]);
Route::get("/validatecom/{id}", [CommentController::class, "validation"]);
Route::get("/validatepost/{id}", [PostController::class, "validation"]);


// mailing
Route::post("/newsletter", [NewsletterController::class, "store"]);
Route::post("/mail", [MailController::class, "store"]);

// auth et adminLTE
Auth::routes();

// get blog
Route::get("/search", [PostController::class, "search"]);
Route::get("/filterc/{id}", [PostController::class, "filterc"]);
Route::get("/filtertag/{id}", [PostController::class, "filtertag"]);

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');