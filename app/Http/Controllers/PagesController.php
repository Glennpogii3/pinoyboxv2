<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function track()
    {
        return view('trackyourshipment');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function home()
    {
        return view('welcome');
    }

    public function how()
    {
        return view('howitworks');
    }

    public function rate()
    {
        return view('rates');
    }


    public function service()
    {
        return view('services');
    }




}
