<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\TrainerController;
use App\Models\About;
use App\Models\Background;
use App\Models\Classe;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Nav;
use App\Models\Pricing;
use App\Models\Testimonial;
use App\Models\Trainer;
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
    $galleries = Gallery::all();
    $events = Event::all();
    $pricing = Pricing::all();
    $testimonials = Testimonial::all();
    $footer = Footer::all();
    return view("site.home", compact("navitems", "backgrounds", "about", "classes", "trainers", "galleries", "events", "pricing", "testimonials", "footer"));
});



Route::get('/back', function () {
    return view("backoffice.back");
})->middleware(['auth']);







Route::resource('/back/nav', NavController::class);
Route::resource('/back/background', BackgroundController::class);
Route::resource('/back/classe', ClasseController::class);
Route::resource('/back/event', EventController::class);
Route::resource('/back/footer', FooterController::class);
Route::resource('/back/gallery', GalleryController::class);
Route::resource('/back/pricing', PricingController::class);
Route::resource('/back/role', RoleSeeder::class);
Route::resource('/back/schedule', ScheduleController::class);
Route::resource('/back/testimonial', TestimonialController::class);
Route::resource('/back/titre', TitreController::class);
Route::resource('/back/trainer', TrainerController::class);
Route::resource('/back/about', AboutController::class);
Route::resource('/back/user', UserController::class);