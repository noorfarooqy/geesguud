<?php

namespace App\Http\Controllers\misc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    //

    public function SetLanguage(Request $request)
    {
        $rules = [
            "language" => "required|integer|in:1,2"
        ];
        $data = $request->validate($rules);

        switch($request->language)
        {
            case 2:
                App::setLocale('se');
                Cookie::queue('locale', 'se', 60*24*365);
                break;
            default:
                App::setlocale('en');
                Cookie::queue('locale', 'en', 60*24*365);
                break;
        }

        return Redirect::back();
    }
}
