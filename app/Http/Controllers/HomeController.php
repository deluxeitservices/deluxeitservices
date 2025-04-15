<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
 use Illuminate\Support\Str;
 use App\Models\PreownedSale; // Make sure you import the model
 use App\Models\PreownedContact; // Make sure you import the model
 use App\Models\PreownedNewsletter; // Make sure you import the model
 use App\Models\ProductFrontImages; // Make sure you import the model
 use Illuminate\Support\Facades\Storage; // Add this line


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

   
        /**
     * Show the application About Us.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutus()
    {

        return view('about');
    }


        /**
     * Show the application seo.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function seo()
    {

        return view('seo');
    }

        /**
     * Show the application Contact Us.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactus()
    {
        return view('contact');        
    }


       /**
     * Show the application FAQ.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function portfolio()
    {
        return view('portfolio');        
    }

    //    /**
    //  * Show the application Return policy.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function returnPolicy()
    // {
    //     return view('return-policy');        
    // }

    //    /**
    //  * Show the application Terms and condition.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function termsCondition()
    // {
    //     return view('terms-and-conditions');        
    // }


    // public function privacyPolicy()
    // {
    //     return view('privacy');        
    // }

    // public function ourShowrooms()
    // {
    //     return view('ourShowrooms');        
    // }

    // public function guide()
    // {
    //     return view('guide');        
    // }

    // public function delivery()
    // {
    //     return view('delivery');        
    // }

    // public function watchRepairs()
    // {
    //     return view('watchRepairs');        
    // }

    // public function bookappointment()
    // {
    //     return view('bookappointment');        
    // }

}
