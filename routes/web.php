<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TrainerController;
use App\Models\About;
use App\Models\Background;
use App\Models\Classe;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Nav;
use App\Models\Pricing;
use App\Models\Testimonial;
use App\Models\Trainer;
use App\Models\User;
use Database\Seeders\LogoSeeder;
use Database\Seeders\RoleSeeder;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function(){
    $navitems = Nav::all();
    $backgrounds = Background::all();
    $about = About::all();
    $classes = Classe::all();
    $trainers = Trainer::all();
    $galleries = Gallery::inRandomOrder()->limit(6)->get();
    $events = Event::all();
    $pricing = Pricing::all();
    $testimonials = Testimonial::inRandomOrder()->limit(5)->get();
    $footer = Footer::all();
    $logo = Logo::all();
    return view("site.home", compact("logo", "navitems", "backgrounds", "about", "classes", "trainers", "galleries", "events", "pricing", "testimonials", "footer"));
});

Route::get('/back', function () {
    $user = User::all();
    return view("backoffice.back", compact("user"));
})->middleware(['auth']);


Route::resource('/back/nav', NavController::class)->middleware(["auth", "manager"]);
Route::resource('/back/background', BackgroundController::class)->middleware(["auth", "manager"]);
Route::resource('/back/classe', ClasseController::class)->middleware(["auth","coach"]);
Route::resource('/back/event', EventController::class)->middleware(["auth", "manager"]);
Route::resource('/back/footer', FooterController::class)->middleware(["auth", "manager"]);
Route::resource('/back/gallery', GalleryController::class)->middleware(["auth", "manager"]);
Route::resource('/back/pricing', PricingController::class)->middleware(["auth", "manager"]);
Route::resource('/back/role', RoleSeeder::class)->middleware(["auth", "manager"]);
Route::resource('/back/logo', LogoController::class)->middleware(["auth", "manager"]);
Route::resource('/back/schedule', ScheduleController::class)->middleware(["auth", "manager"]);
Route::resource('/back/testimonial', TestimonialController::class)->middleware(["auth", "manager"]);
Route::resource('/back/titre', TitreController::class)->middleware(["auth", "manager"]);
Route::resource('/back/trainer', TrainerController::class)->middleware(["auth", "manager"]);
Route::resource('/back/about', AboutController::class)->middleware(["auth", "manager"]);
Route::resource('/back/user', UserController::class)->middleware(["auth", "manager"]);
Route::resource('/back/mail', MailController::class)->middleware(["auth", "manager"]);
Route::resource('/back/newsletter', NewsletterController::class)->middleware(["auth", "admin"]);