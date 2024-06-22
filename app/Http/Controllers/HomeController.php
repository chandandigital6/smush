<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\ChoseUs;
use App\Models\ClientLogo;
use App\Models\Counter;
use App\Models\Plan;
use App\Models\Service;
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
        return view('front_end.index',compact('banners','about','plan','testimonials','blog','logos'));

      }
      public function about(){
          $teams=Team::all();
          $about=About::all();
          $counters=Counter::all();
          $chooseUs=ChoseUs::all();
          return view('front_end.about',compact('about','teams' ,'counters','chooseUs'));
      }
      public function services(){
          $services=Service::all();
          $testimonials=Testimonial::all();
          $chooseUs=ChoseUs::all();
          return view('front_end.services',compact('services','testimonials','chooseUs'));
      }
      public function contact(){
          return view('front.contact');
      }
      public function price(){
          $teams=Team::all();
          $plans=Plan::all();
          return view('front.price',compact('plans','teams'));
      }
      public function team(){
          $teams=Team::all();
          return view('front.team',compact('teams'));
      }
      public function testimonial(){
          $testimonials=Testimonial::all();
          return view('front.testimonial',compact('testimonials'));
      }
      public function appointment(){
          return view('front.appointment');
      }

    public function blog(){
        $blogs=Blog::all();
        return view('front.blog',compact('blogs'));
    }
    public function blogDetails(Blog $blog){
       $categories = Blog::all();
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();
//
        // Pass the data to the view
        return view('front.blogDetails', compact('blog', 'categories', 'recentPosts'));
    }
}
