<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BannerController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\PlanCOntroller;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceChooseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceGalleryController;
use App\Http\Controllers\ServiceTitleController;
use App\Http\Controllers\ServiceVideoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
//Route::get('/team',[HomeController::class,'team'])->name('team');
//Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
//Route::get('/price',[HomeController::class,'price'])->name('price');
//Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
//Route::get('/smash_repair',[HomeController::class,'smash_repair'])->name('smash-repair');
Route::get('/blog/{blogs}',[HomeController::class,'blogDetails'])->name('blog-details');





Route::get('/services-detail', function () {
    return view('front_end.servicesDetail');
})->name('services-detail');





Route::get('login-form',[AuthController::class,'index'])->name('login-form');
Route::get('registration',[AuthController::class,'registration'])->name('registration');
//Route::post('store', [AuthController::class, 'store'])->name('auth.store');
Route::post('auth-store', [AuthController::class, 'store'])->name('auth-store');
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('forget',[AuthController::class,'forget'])->name('auth.forget');
Route::post('forget',[AuthController::class,'forget_pass'])->name('auth.forget_pass');
Route::get('reset-password',[AuthController::class,'reset_password'])->name('reset-password');
Route::post('store-password',[AuthController::class,'store_password'])->name('store-password');

Route::post('appointment/store',[AppointmentController::class,'store'])->name('appointment.store');

Route::get('/{title}',[ServiceController::class,'show'])->name('service.show');

Route::get('run/dashboard', [AuthController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('auth.dashboard');

Route::group(['middleware' => ['auth']],function (){
    Route::get('banner/index',[BannerController::class,'index'])->name('banner.index');
    Route::get('banner/create',[BannerController::class,'create'])->name('banner.create');
    Route::post('banner/store',[BannerController::class,'store'])->name('banner.store');
    Route::get('banner/edit/{banner}',[BannerController::class,'edit'])->name('banner.edit');
    Route::get('banner/delete/{banner}',[BannerController::class,'delete'])->name('banner.delete');
    Route::get('banner/duplicate/{banner}',[BannerController::class,'duplicate'])->name('banner.duplicate');
    Route::post('banner/update/{banner}',[BannerController::class,'update'])->name('banner.update');

      //  about

    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{about}',[AboutController::class,'edit'])->name('about.edit');
    Route::get('about/delete/{about}',[AboutController::class,'delete'])->name('about.delete');
    Route::get('about/duplicate/{about}',[AboutController::class,'duplicate'])->name('about.duplicate');
    Route::post('about/update/{about}',[AboutController::class,'update'])->name('about.update');

    // Appointment

    Route::get('appointment/index',[AppointmentController::class,'index'])->name('appointment.index');
    Route::get('appointment/create',[AppointmentController::class,'create'])->name('appointment.create');
    Route::get('appointment/edit/{appointment}',[AppointmentController::class,'edit'])->name('appointment.edit');
    Route::post('appointment/update/{appointment}',[AppointmentController::class,'update'])->name('appointment.update');
    Route::get('appointment/delete/{appointment}',[AppointmentController::class,'delete'])->name('appointment.delete');
    Route::get('appointment/duplicate/{appointment}',[AppointmentController::class,'duplicate'])->name('appointment.duplicate');


    //services

    Route::get('service/index',[ServiceController::class,'index'])->name('service.index');
    Route::get('service/create',[ServiceController::class,'create'])->name('service.create');
    Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('service/edit/{service}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('service/update/{service}',[ServiceController::class,'update'])->name('service.update');
    Route::get('service/delete/{service}',[ServiceController::class,'delete'])->name('service.delete');
    Route::get('service/duplicate/{service}',[ServiceController::class,'duplicate'])->name('service.duplicate');


    //servicesTitle

    Route::get('serviceTitle/index',[ServiceTitleController::class,'index'])->name('serviceTitle.index');
    Route::get('serviceTitle/create',[ServiceTitleController::class,'create'])->name('serviceTitle.create');
    Route::post('serviceTitle/store',[ServiceTitleController::class,'store'])->name('serviceTitle.store');
    Route::get('serviceTitle/edit/{serviceTitle}',[ServiceTitleController::class,'edit'])->name('serviceTitle.edit');
    Route::post('serviceTitle/update/{serviceTitle}',[ServiceTitleController::class,'update'])->name('serviceTitle.update');
    Route::get('serviceTitle/delete/{serviceTitle}',[ServiceTitleController::class,'delete'])->name('serviceTitle.delete');
    Route::get('serviceTitle/duplicate/{serviceTitle}',[ServiceTitleController::class,'duplicate'])->name('serviceTitle.duplicate');

    // Plans

    Route::get('plan/index',[PlanCOntroller::class,'index'])->name('plan.index');
    Route::get('plan/create',[PlanCOntroller::class,'create'])->name('plan.create');
    Route::post('plan/store',[PlanCOntroller::class,'store'])->name('plan.store');
    Route::get('plan/edit/{plan}',[PlanCOntroller::class,'edit'])->name('plan.edit');
    Route::post('plan/update/{plan}',[PlanCOntroller::class,'update'])->name('plan.update');
    Route::get('plan/delete/{plan}',[PlanCOntroller::class,'delete'])->name('plan.delete');
    Route::get('plan/duplicate/{plan}',[PlanCOntroller::class,'duplicate'])->name('plan.duplicate');


    //testimonial

    Route::get('testimonial/index',[TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('testimonial/edit/{testimonial}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('testimonial/update/{testimonial}',[TestimonialController::class,'update'])->name('testimonial.update');
    Route::get('testimonial/delete/{testimonial}',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('testimonial/duplicate/{testimonial}',[TestimonialController::class,'duplicate'])->name('testimonial.duplicate');


    // teams

    Route::get('team/index',[TeamController::class,'index'])->name('team.index');
    Route::get('team/create',[TeamController::class,'create'])->name('team.create');
    Route::post('team/store',[TeamController::class,'store'])->name('team.store');
    Route::get('team/edit/{team}',[TeamController::class,'edit'])->name('team.edit');
    Route::post('team/update/{team}',[TeamController::class,'update'])->name('team.update');
    Route::get('team/delete/{team}',[TeamController::class,'delete'])->name('team.delete');
    Route::get('team/duplicate/{team}',[TeamController::class,'duplicate'])->name('team.duplicate');

//    // enquiry
//    Route::prefix('blog')->name('blog.')->group(function(){
//        Route::get('/',[BlogController::class,'index'])->name('index');
//        Route::get('create/',[BlogController::class,'create'])->name('create');
//        Route::post('store',[BlogController::class,'store'])->name('store');
//        Route::get('edit/{blog}',[BlogController::class,'edit'])->name('edit');
//        Route::post('update/{blog}',[BlogController::class,'update'])->name('update');
//        Route::get('delete/{blog}',[BlogController::class,'delete'])->name('delete');
//        Route::get('duplicate/{blog}',[BlogController::class,'duplicate'])->name('duplicate');
//    });


    // blog

    Route::get('blogs/index',[BlogController::class,'index'])->name('blogs.index');
    Route::get('blogs/create',[BlogController::class,'create'])->name('blogs.create');
    Route::post('blogs/store',[BlogController::class,'store'])->name('blogs.store');
    Route::get('blogs/edit/{blog}',[BlogController::class,'edit'])->name('blogs.edit');
    Route::post('blogs/update/{blog}',[BlogController::class,'update'])->name('blogs.update');
    Route::get('blogs/delete/{blog}',[BlogController::class,'delete'])->name('blogs.delete');
    Route::get('blogs/duplicate/{blog}',[BlogController::class,'duplicate'])->name('blogs.duplicate');

    //counter

    Route::get('counter/index',[CounterController::class,'index'])->name('counter.index');
    Route::get('counter/create',[CounterController::class,'create'])->name('counter.create');
    Route::post('counter/store',[CounterController::class,'store'])->name('counter.store');
    Route::get('counter/edit/{counter}',[CounterController::class,'edit'])->name('counter.edit');
    Route::post('counter/update/{counter}',[CounterController::class,'update'])->name('counter.update');
    Route::get('counter/delete/{counter}',[CounterController::class,'delete'])->name('counter.delete');
    Route::get('counter/duplicate/{counter}',[CounterController::class,'duplicate'])->name('counter.duplicate');


    //choose

    Route::get('chose/index',[ChooseController::class,'index'])->name('chose.index');
    Route::get('chose/create',[ChooseController::class,'create'])->name('chose.create');
    Route::post('chose/store',[ChooseController::class,'store'])->name('chose.store');
    Route::get('chose/edit/{chose}',[ChooseController::class,'edit'])->name('chose.edit');
    Route::post('chose/update/{chose}',[ChooseController::class,'update'])->name('chose.update');
    Route::get('chose/delete/{chose}',[ChooseController::class,'delete'])->name('chose.delete');
    Route::get('chose/duplicate/{chose}',[ChooseController::class,'duplicate'])->name('chose.duplicate');



//Servicechoose

    Route::get('serviceChoose/index',[ServiceChooseController::class,'index'])->name('serviceChoose.index');
    Route::get('serviceChoose/create',[ServiceChooseController::class,'create'])->name('serviceChoose.create');
    Route::post('serviceChoose/store',[ServiceChooseController::class,'store'])->name('serviceChoose.store');
    Route::get('serviceChoose/edit/{serviceChoose}',[ServiceChooseController::class,'edit'])->name('serviceChoose.edit');
    Route::post('serviceChoose/update/{serviceChoose}',[ServiceChooseController::class,'update'])->name('serviceChoose.update');
    Route::get('serviceChoose/delete/{serviceChoose}',[ServiceChooseController::class,'delete'])->name('serviceChoose.delete');
    Route::get('serviceChoose/duplicate/{serviceChoose}',[ServiceChooseController::class,'duplicate'])->name('serviceChoose.duplicate');


    // logo

    Route::get('logo/index',[ClientController::class,'index'])->name('logo.index');
    Route::get('logo/create',[ClientController::class,'create'])->name('logo.create');
    Route::post('logo/store',[ClientController::class,'store'])->name('logo.store');
    Route::get('logo/edit/{logo}',[ClientController::class,'edit'])->name('logo.edit');
    Route::post('logo/update/{logo}',[ClientController::class,'update'])->name('logo.update');
    Route::get('logo/delete/{logo}',[ClientController::class,'delete'])->name('logo.delete');
    Route::get('logo/duplicate/{logo}',[ClientController::class,'duplicate'])->name('logo.duplicate');
    Route::delete('/remove-image', [ClientController::class, 'removeImage'])->name('remove.image');


// serviceGallery


    Route::get('gallery/index',[ServiceGalleryController::class,'index'])->name('gallery.index');
    Route::get('gallery/create',[ServiceGalleryController::class,'create'])->name('gallery.create');
    Route::post('gallery/store',[ServiceGalleryController::class,'store'])->name('gallery.store');
    Route::get('gallery/edit/{gallery}',[ServiceGalleryController::class,'edit'])->name('gallery.edit');
    Route::post('gallery/update/{gallery}',[ServiceGalleryController::class,'update'])->name('gallery.update');
    Route::get('gallery/delete/{gallery}',[ServiceGalleryController::class,'delete'])->name('gallery.delete');
    Route::get('gallery/duplicate/{gallery}',[ServiceGalleryController::class,'duplicate'])->name('gallery.duplicate');



    //service videoa


    Route::get('serviceVideo/index',[ServiceVideoController::class,'index'])->name('serviceVideo.index');
    Route::get('serviceVideo/create',[ServiceVideoController::class,'create'])->name('serviceVideo.create');
    Route::post('serviceVideo/store',[ServiceVideoController::class,'store'])->name('serviceVideo.store');
    Route::get('serviceVideo/edit/{serviceVideo}',[ServiceVideoController::class,'edit'])->name('serviceVideo.edit');
    Route::post('serviceVideo/update/{serviceVideo}',[ServiceVideoController::class,'update'])->name('serviceVideo.update');
    Route::get('serviceVideo/delete/{serviceVideo}',[ServiceVideoController::class,'delete'])->name('serviceVideo.delete');
    Route::get('serviceVideo/duplicate/{serviceVideo}',[ServiceVideoController::class,'duplicate'])->name('serviceVideo.duplicate');


    //seo


    Route::get('seo/index',[SeoController::class,'index'])->name('seo.index');
    Route::get('seo/create',[SeoController::class,'create'])->name('seo.create');
    Route::post('seo/store',[SeoController::class,'store'])->name('seo.store');
    Route::get('seo/edit/{seo}',[SeoController::class,'edit'])->name('seo.edit');
    Route::post('seo/update/{seo}',[SeoController::class,'update'])->name('seo.update');
    Route::get('seo/delete/{seo}',[SeoController::class,'delete'])->name('seo.delete');
    Route::get('seo/duplicate/{seo}',[SeoController::class,'duplicate'])->name('seo.duplicate');

});


Route::get('run/foo', function () {
    $exitCode = Artisan::call('storage:link');
    if ($exitCode === 0) {
        return 'Success';
    } else {
        return 'Failed'; // You can customize this message as needed
    }
});

Route::get('run/migrate', function () {
    $exitCode = Artisan::call('migrate:fresh', ['--seed' => true]);
    if ($exitCode === 0) {
        return 'Migration successful';
    } else {
        return 'Migration failed'; // You can customize this message as needed

    }
});

Route::get('run/onlyMigrate', function () {
    $exitCode = Artisan::call('migrate');
    if ($exitCode === 0) {
        return 'Migration successful';
    } else {
        return 'Migration failed'; // You can customize this message as needed

    }
});




