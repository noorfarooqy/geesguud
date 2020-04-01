<?php

namespace App\Http\Controllers;

class pagesController extends Controller
{
    //

    public function openContactUsPage()
    {
        return view('contactus.contact');
    }

    public function openComingSoonPage()
    {
        return view('comingsoon.coming');
    }
    public function openAboutUsPage()
    {
        return view('aboutus.about');
    }
}
