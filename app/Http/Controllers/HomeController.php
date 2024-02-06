<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Article;
use Session;

class HomeController extends Controller
{
    public function index(){
        $services = Service::get();
        dd($services);
        $articles = Article::latest()->take(5)->get();

        return view('index',compact('services','articles'));
    }


    public function changeLocale($locale){
       
        if (! in_array($locale, ['en', 'ar', 'fr'])) {
            abort(400);
        }
      
        Session::put('locale',$locale);
        
        return redirect()->back();

    }


    public function blog(){
        $articles = Article::get();
        return view('blog',compact('articles'));
    }


    public function article($slug){

        $article = Article::where('slug',$slug)->firstOrFail();
        $articles = Article::latest()->take(5)->get();
        return view('article',compact('article','articles'));
    }

    public function services(){
        $services = Service::get();
        return view('services',compact('services'));
    }


    public function service($slug){
        $service = Service::where('slug',$slug)->firstOrFail();
        $services = Service::get();
        return view('details-service',compact('service','services'));
    }
}
