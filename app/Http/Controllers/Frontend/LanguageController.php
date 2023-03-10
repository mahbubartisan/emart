<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function EnglishLanguage()
    {

        session()->get('language');
        session()->forget('language');
        Session::put('language', 'english');

        return back();
    }

    public function HindiLanguage()
    {

        session()->get('language');
        session()->forget('language');
        Session::put('language', 'hindi');

        return back();
    }


}