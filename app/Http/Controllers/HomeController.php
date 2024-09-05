<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\ChoseUs;
use App\Models\ClientLogo;
use App\Models\Counter;
use App\Models\Plan;
use App\Models\Seo;
use App\Models\Service;
use App\Models\ServiceTitle;
use App\Models\Team;
use App\Models\Testimonial;
use http\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       $banners=Banner::all();
       $about=About::all();
       $plan=Plan::all();
       $testimonials=Testimonial::all();
       $blog=Blog::all();
       $logos=ClientLogo::all();
        $seos = Seo::where('page', 'index')->get();
        $serviceTitle=ServiceTitle::all();
        return view('front_end.index',compact('seos','banners','about','plan','testimonials','blog','logos','serviceTitle'));

      }
      public function about(){
          $teams=Team::all();
          $about=About::all();
          $counters=Counter::all();
          $chooseUs=ChoseUs::all();
          $testimonials=Testimonial::all();
          $logos=ClientLogo::all();
          $seos = Seo::where('page', 'about-us')->get();
          return view('front_end.about',compact('about','teams' ,'counters','chooseUs','testimonials','logos','seos'));
      }
      public function services(){
          $services=Service::where('status' ,1)->get();
//          dd($services);
          $testimonials=Testimonial::all();
          $chooseUs=ChoseUs::all();
          $logos=ClientLogo::all();
          $seos = Seo::where('page', 'services')->get();
          $serviceTitle=ServiceTitle::all();
          return view('front_end.services',compact('services','testimonials','chooseUs','logos','seos','serviceTitle'));
      }
      public function contact(){
          $seos = Seo::where('page', 'contact-us')->get();
          return view('front_end.contact',compact('seos'));
      }




      public function blogDetails($url)
      {
          // Fetch the blog by its URL
          $blogs = Blog::where('url', $url)->firstOrFail();
          if(!$blogs){
            abort(404);
        }
          // Fetch recent posts and SEO details
          $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();
          $seos = Seo::where('blog_id', $blogs->id)->get(); // use id to fetch related SEO data
        // dd($seos);
          // Pass the data to the view
          return view('front_end.blogDetails', compact('blogs', 'recentPosts', 'seos'));
      }



//    public function smash_repair()
//    {
//        $seos = Seo::where('page', 'smash_repair')->get();
//        $services = Service::where('title','smash_repair')->with(['video', 'gallery'])->get();
////        dd($services);
//        $testimonials = Testimonial::all();
//        $chooseUs = ChoseUs::all();
//        $otherServices=Service::all();
//        return view('front_end.smash_repair', compact('seos','services','testimonials','chooseUs','otherServices'));
//    }


   public function thank(){
       $seos = Seo::where('page', 'thank-you')->get();
        return view('front_end.components.thankYouPAge',compact('seos'));
   }


}
