<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Cleaning;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Tesimonial;
use App\Models\Video;


class HomeController extends Controller
{
    public function home(){
        $hero = Hero::first();
        $cleaning = Cleaning::where('type', 'cleaning_service')
                     ->latest()
                     ->take(5)
                     ->get();
        $pestcontroll = Cleaning::where('type', 'pestcontrol_service')
                     ->latest()
                     ->take(5)
                     ->get();
        $manpower = Cleaning::where('type', 'manpower_service')
                     ->latest()
                     ->take(5)
                     ->get();
        $blog = Cleaning::where('type', 'blog')
                     ->latest()
                     ->take(5)
                     ->get();
        $portfolio = Portfolio::latest()
                     ->take(5)
                     ->get();
        $tesimonial = Tesimonial::latest()
                     ->take(5)
                     ->get();
        return view('frontend.welcome', compact('hero','cleaning','pestcontroll','manpower','blog','portfolio','tesimonial'));
    }

    public function about(){
        $about = About::first();
        return view('frontend.pages.about', compact('about'));
    }

    public function servicedetails($id){
        $cleaning = Cleaning::findOrFail($id);

        $cleaninglist = Cleaning::where('type', $cleaning->type)
                                ->where('id', '!=', $cleaning->id) // optional: exclude current
                                ->limit(7)
                                ->get();

        return view('frontend.pages.servicedetails', compact('cleaning', 'cleaninglist'));
    }

    public function cleaning(){
        $cleaning = Cleaning::where('type', 'cleaning_service')
                     ->latest()
                     ->get();
        $name = 'Cleaning Service';
        return view('frontend.pages.cleaning', compact('cleaning', 'name'));
    }

    public function pestcontroll(){
        $cleaning = Cleaning::where('type', 'pestcontrol_service')
                     ->latest()
                     ->get();
        $name = 'Pestcontrol Service';
        return view('frontend.pages.cleaning', compact('cleaning', 'name'));
    }

    public function manpower(){
        $cleaning = Cleaning::where('type', 'manpower_service')
                     ->latest()
                     ->get();
        $name = 'Manpower Service';
        return view('frontend.pages.cleaning', compact('cleaning', 'name'));
    }

    public function blog(){
        $cleaning = Cleaning::where('type', 'blog')
                     ->latest()
                     ->get();
        $name = 'Blog';
        return view('frontend.pages.cleaning', compact('cleaning', 'name'));
    }

    public function contact(){
        $about = About::first();
        return view('frontend.pages.contact', compact('about'));
    }
    public function portfolio(){
        $portfolio = Portfolio::all();
        return view('frontend.pages.portfolio', compact('portfolio'));
    }

    public function testimonial(){
         $tesimonial = Tesimonial::all();
        return view('frontend.pages.testimonial', compact('tesimonial'));
    }
    public function video(){
         $video = Video::all();
        return view('frontend.pages.video', compact('video'));
    }

}
