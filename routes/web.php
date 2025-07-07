<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cc', function (Request $request) {
    Artisan::call('view:cache');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    return "✅ View, route, and config caches have been created!";
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/details/{id}', [HomeController::class, 'servicedetails'])->name('servicedetails');
Route::get('/pestcontrolldetails/{id}', [HomeController::class, 'pestcontrolldetails'])->name('pestcontrolldetails');
Route::get('/manpowerdetails/{id}', [HomeController::class, 'manpowerdetails'])->name('manpowerdetails');
Route::get('/cleaning', [HomeController::class, 'cleaning'])->name('cleaning');
Route::get('/pestcontroll', [HomeController::class, 'pestcontroll'])->name('pestcontroll');
Route::get('/manpower', [HomeController::class, 'manpower'])->name('manpower');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/pall', [HomeController::class, 'pall'])->name('pall');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/project', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/video', [HomeController::class, 'video'])->name('video');
Route::post('/clientcontact', [HomeController::class, 'clientcontact'])->name('clientcontact');


Route::middleware(['auth', 'checktype:admin,superadmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/ckupload', [AdminController::class, 'ckupload'])->name('ckupload');


    // hero
    Route::get('/heromanage', [AdminController::class, 'heromanage'])->name('heromanage');
    Route::get('/heroedit/{id}', [AdminController::class, 'heroedit'])->name('heroedit');
    Route::post('/heroupdate/{id}', [AdminController::class, 'heroupdate'])->name('heroupdate');


    // cleaningmanage
    Route::get('/cleaningmanage', [AdminController::class, 'cleaningmanage'])->name('cleaningmanage');
    Route::get('/cleaningcreate', [AdminController::class, 'cleaningcreate'])->name('cleaningcreate');
    Route::post('/cleaningstore', [AdminController::class, 'cleaningstore'])->name('cleaningstore');
    Route::get('/cleaningedit/{id}', [AdminController::class, 'cleaningedit'])->name('cleaningedit');
    Route::post('/cleaningupdate/{id}', [AdminController::class, 'cleaningupdate'])->name('cleaningupdate');


    // portfoliomanage
    Route::get('/portfoliomanage', [AdminController::class, 'portfoliomanage'])->name('portfoliomanage');
    Route::get('/portfoliocreate', [AdminController::class, 'portfoliocreate'])->name('portfoliocreate');
    Route::post('/portfoliostore', [AdminController::class, 'portfoliostore'])->name('portfoliostore');
    Route::get('/portfolioedit/{id}', [AdminController::class, 'portfolioedit'])->name('portfolioedit');
    Route::post('/portfolioupdate/{id}', [AdminController::class, 'portfolioupdate'])->name('portfolioupdate');
    Route::get('/portfoliodelete/{id}', [AdminController::class, 'portfoliodelete'])->name('portfoliodelete');

    // client contact
    Route::get('/clientcontactmanage', [AdminController::class, 'clientcontactmanage'])->name('clientcontactmanage');
    Route::get('/clientcontactdelete/{id}', [AdminController::class, 'clientcontactdelete'])->name('clientcontactdelete');

    // codepush
    Route::get('/codepushmanage', [AdminController::class, 'codepushmanage'])->name('codepushmanage');
    Route::get('/codepushedit/{id}', [AdminController::class, 'codepushedit'])->name('codepushedit');
    Route::post('/codepushupdate/{id}', [AdminController::class, 'codepushupdate'])->name('codepushupdate');


    // tesimonialmanage
    Route::get('/testimonialmanage', [AdminController::class, 'tesimonialmanage'])->name('tesimonialmanage');
    Route::get('/testimonialcreate', [AdminController::class, 'tesimonialcreate'])->name('tesimonialcreate');
    Route::post('/testimonialstore', [AdminController::class, 'tesimonialstore'])->name('tesimonialstore');
    Route::get('/testimonialedit/{id}', [AdminController::class, 'tesimonialedit'])->name('tesimonialedit');
    Route::post('/testimonialupdate/{id}', [AdminController::class, 'tesimonialupdate'])->name('tesimonialupdate');
    Route::get('/testimonialdelete/{id}', [AdminController::class, 'testimonialdelete'])->name('testimonialdelete');


    // videomanage
    Route::get('/videomanage', [AdminController::class, 'videomanage'])->name('videomanage');
    Route::get('/videocreate', [AdminController::class, 'videocreate'])->name('videocreate');
    Route::post('/videostore', [AdminController::class, 'videostore'])->name('videostore');
    Route::get('/videoedit/{id}', [AdminController::class, 'videoedit'])->name('videoedit');
    Route::post('/videoupdate/{id}', [AdminController::class, 'videoupdate'])->name('videoupdate');
    Route::get('/videodelete/{id}', [AdminController::class, 'videodelete'])->name('videodelete');


    // about
    Route::get('/aboutmanage', [AdminController::class, 'aboutmanage'])->name('aboutmanage');
    Route::get('/aboutedit/{id}', [AdminController::class, 'aboutedit'])->name('aboutedit');
    Route::post('/aboutupdate/{id}', [AdminController::class, 'aboutupdate'])->name('aboutupdate');

    // website
    Route::get('/websitemanage', [AdminController::class, 'websitemanage'])->name('websitemanage');
    Route::get('/websiteedit/{id}', [AdminController::class, 'websiteedit'])->name('websiteedit');
    Route::post('/websiteupdate/{id}', [AdminController::class, 'websiteupdate'])->name('websiteupdate');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
