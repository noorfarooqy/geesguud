<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        
        

    }
    public function openAdminIndex(Request $request)
    {
        $this->SetLanguage();
        return view('admin.indexpage');
    }

    protected function SetLanguage()
    {

        if(Cookie::has('locale'))
            App::setLocale(Cookie::get('locale'));
        else
            App::setLocale('en');
    }
}
