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
use App\Http\Controllers\ServiceBeforController;
use App\Http\Controllers\ServiceChooseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceGalleryController;
use App\Http\Controllers\ServiceHeaderController;
use App\Http\Controllers\ServiceTitleController;
use App\Http\Controllers\ServiceVideoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Models\Blog;
use App\Models\Seo;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceAddonController;
use App\Http\Controllers\ServiceBenefitController;
use App\Http\Controllers\ServiceBestController;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
Route::get('/thankYou',[HomeController::class,'thank'])->name('home.thank');
//Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
//Route::get('/price',[HomeController::class,'price'])->name('price');
//Route::get('/appointment',[HomeController::class,'appointment'])->name('appointment');
//Route::get('/smash_repair',[HomeController::class,'smash_repair'])->name('smash-repair');
Route::get('/blog/{url}',[HomeController::class,'blogDetails'])->name('blog-details');



Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create();

    // Static URLs
    $urls = [
        ['loc' => '/', 'priority' => 1.00],
        ['loc' => '/about', 'priority' => 0.80],
        ['loc' => '/services', 'priority' => 0.80],
        ['loc' => '/contact', 'priority' => 0.80],
        ['loc' => '/smash-repair', 'priority' => 0.80],
        ['loc' => '/scratch-repair', 'priority' => 0.80],
        ['loc' => '/dent-repair', 'priority' => 0.80],
        ['loc' => '/panel-beating', 'priority' => 0.80],
        ['loc' => '/trucks-repair', 'priority' => 0.80],
        ['loc' => '/bumper-repair', 'priority' => 0.80],
        ['loc' => '/headlight-restoration', 'priority' => 0.80],
        ['loc' => '/scratch-chip-repair', 'priority' => 0.80],
        ['loc' => '/car-spray-painting', 'priority' => 0.80],
        ['loc' => '/blog/understanding-common-car-issues-in-australia', 'priority' => 0.80],
        ['loc' => '/blog/top-benefits-of-professional-scratch-repair-services', 'priority' => 0.80],
        ['loc' => '/blog/vehicle-repair-services-trust-mobile-smash-repair-for-quick-response', 'priority' => 0.80],
        ['loc' => '/all-blogs', 'priority' => 0.80],
        ['loc' => '/privacy-policy', 'priority' => 0.80],
        ['loc' => '/terms-and-conditions', 'priority' => 0.80],
        ['loc' => '/not-at-fault-accident-repairs-in-melbourne', 'priority' => 0.80],
        ['loc' => '/paintless-dent-removal-service-in-melbourne', 'priority' => 0.80],
    ];

    // Convert last modification date to DateTime format
    $lastModified = Carbon::createFromFormat('Y-m-d\TH:i:sP', '2025-02-07T04:04:26+00:00');

    // Add URLs to sitemap
    foreach ($urls as $url) {
        $sitemap->add(Url::create($url['loc'])
            ->setPriority($url['priority'])
            ->setLastModificationDate($lastModified));
    }

    return $sitemap->toResponse(request());
});

Route::redirect('/not-at-fault-accident-repairs', '/not-at-fault-accident-repairs-in-melbourne', 301);
Route::redirect('/scratch_chip_repair', '/scratch-repair', 301);
Route::redirect('/terms_and_conditions', '/terms-and-conditions', 301);
Route::redirect('/panel_beating', '/panel-beating', 301);
Route::redirect('/smash_repair', '/smash-repair', 301);
Route::redirect('/car_spray_painting', '/car-spray-painting', 301);
Route::redirect('/headlight_restoration', '/headlight-restoration', 301);
Route::redirect('/scratch_and_chip_repair', '/scratch-chip-repair', 301);
Route::redirect('/panel-beating?utm_medium=social&utm_source=heylink.me', '/panel-beating', 301);

Route::get('/services-detail', function () {
    return view('front_end.servicesDetail');
})->name('services-detail');

Route::get('/terms-and-conditions', function () {
    return view('front_end.terms_and_conditions')->with('seos',$seos = Seo::where('page', 'terms_and_conditions')->get());
})->name('terms_and_conditions');

Route::get('/privacy-policy', function () {
    return view('front_end.privacy-policy')->with('seos',$seos = Seo::where('page', 'privacy_policy')->get());
})->name('privacy-policy');

Route::get('/all-blogs', function () {
    $blog=Blog::all();
    return view('front_end.all-blogs')->with('seos',$seos = Seo::where('page', 'blog')->get())->with('blog', $blog);
})->name('all-blogs');


Route::fallback(function () {
    return response()->view('errors.404');
});


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

// routes/web.php

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('auth.change-password-form');
Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('auth.update-password');


Route::post('appointment/store',[AppointmentController::class,'store'])->name('appointment.store');
Route::post('appointment/image',[AppointmentController::class,'image'])->name('appointment.image');

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

//faqs
Route::get('faqs/index',[FaqController::class,'index'])->name('faqs.index');
Route::get('faqs/create',[FaqController::class,'create'])->name('faqs.create');
Route::post('faqs/store',[FaqController::class,'store'])->name('faqs.store');
Route::get('faqs/edit/{faqs}',[FaqController::class,'edit'])->name('faqs.edit');
Route::post('faqs/update/{faqs}',[FaqController::class,'update'])->name('faqs.update');
Route::get('faqs/delete/{faqs}',[FaqController::class,'delete'])->name('faqs.delete');
Route::get('faqs/duplicate/{faqs}',[FaqController::class,'duplicate'])->name('faqs.duplicate');

Route::get('serviceAddon/index',[ServiceAddonController::class,'index'])->name('serviceAddon.index');
Route::get('serviceAddon/create',[ServiceAddonController::class,'create'])->name('serviceAddon.create');
Route::post('serviceAddon/store',[ServiceAddonController::class,'store'])->name('serviceAddon.store');
Route::get('serviceAddon/edit/{serviceAddon}',[ServiceAddonController::class,'edit'])->name('serviceAddon.edit');
Route::post('serviceAddon/update/{serviceAddon}',[ServiceAddonController::class,'update'])->name('serviceAddon.update');
Route::get('serviceAddon/delete/{serviceAddon}',[ServiceAddonController::class,'delete'])->name('serviceAddon.delete');
Route::get('serviceAddon/duplicate/{serviceAddon}',[ServiceAddonController::class,'duplicate'])->name('serviceAddon.duplicate');


Route::get('serviceBest/index',[ServiceBestController::class,'index'])->name('serviceBest.index');
Route::get('serviceBest/create',[ServiceBestController::class,'create'])->name('serviceBest.create');
Route::post('serviceBest/store',[ServiceBestController::class,'store'])->name('serviceBest.store');
Route::get('serviceBest/edit/{serviceBest}',[ServiceBestController::class,'edit'])->name('serviceBest.edit');
Route::post('serviceBest/update/{serviceBest}',[ServiceBestController::class,'update'])->name('serviceBest.update');
Route::get('serviceBest/delete/{serviceBest}',[ServiceBestController::class,'delete'])->name('serviceBest.delete');
Route::get('serviceBest/duplicate/{serviceBest}',[ServiceBestController::class,'duplicate'])->name('serviceBest.duplicate');


Route::get('serviceBenefit/index',[ServiceBenefitController::class,'index'])->name('serviceBenefit.index');
Route::get('serviceBenefit/create',[ServiceBenefitController::class,'create'])->name('serviceBenefit.create');
Route::post('serviceBenefit/store',[ServiceBenefitController::class,'store'])->name('serviceBenefit.store');
Route::get('serviceBenefit/edit/{serviceBenefit}',[ServiceBenefitController::class,'edit'])->name('serviceBenefit.edit');
Route::post('serviceBenefit/update/{serviceBenefit}',[ServiceBenefitController::class,'update'])->name('serviceBenefit.update');
Route::get('serviceBenefit/delete/{serviceBenefit}',[ServiceBenefitController::class,'delete'])->name('serviceBenefit.delete');
Route::get('serviceBenefit/duplicate/{serviceBenefit}',[ServiceBenefitController::class,'duplicate'])->name('serviceBenefit.duplicate');



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

//servic header

    Route::get('serviceHeader/index',[ServiceHeaderController::class,'index'])->name('serviceHeader.index');
    Route::get('serviceHeader/create',[ServiceHeaderController::class,'create'])->name('serviceHeader.create');
    Route::post('serviceHeader/store',[ServiceHeaderController::class,'store'])->name('serviceHeader.store');
    Route::get('serviceHeader/edit/{serviceHeader}',[ServiceHeaderController::class,'edit'])->name('serviceHeader.edit');
    Route::post('serviceHeader/update/{serviceHeader}',[ServiceHeaderController::class,'update'])->name('serviceHeader.update');
    Route::get('serviceHeader/delete/{serviceHeader}',[ServiceHeaderController::class,'delete'])->name('serviceHeader.delete');
    Route::get('serviceHeader/duplicate/{serviceHeader}',[ServiceHeaderController::class,'duplicate'])->name('serviceHeader.duplicate');

    Route::get('serviceBefore/index',[ServiceBeforController::class,'index'])->name('serviceBefore.index');
    Route::get('serviceBefore/create',[ServiceBeforController::class,'create'])->name('serviceBefore.create');
    Route::post('serviceBefore/store',[ServiceBeforController::class,'store'])->name('serviceBefore.store');
    Route::get('serviceBefore/edit/{serviceBefore}',[ServiceBeforController::class,'edit'])->name('serviceBefore.edit');
    Route::post('serviceBefore/update/{serviceBefore}',[ServiceBeforController::class,'update'])->name('serviceBefore.update');
    Route::get('serviceBefore/delete/{serviceBefore}',[ServiceBeforController::class,'delete'])->name('serviceBefore.delete');
    Route::get('serviceBefore/duplicate/{serviceBefore}',[ServiceBeforController::class,'duplicate'])->name('serviceBefore.duplicate');

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




