<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LayoutsController extends Controller
{
    public function index()
    {
        return view('layouts.pages.index');
    }

    public function about()
    {
        return view('layouts.pages.about');
    }

    public function solutions()
    {
        return view('layouts.pages.pages');
    }

    public function pricing()
    {
        return view('layouts.pages.pricing');
    }
    
    public function programs()
    {
        return view('layouts.pages.programs');
    }
    
    public function resources()
    {
        return view('layouts.pages.pages');
    }

    public function contact()
    {
        return view('layouts.pages.contact');
    }


    public function sdk()
    {
        return view('layouts.pages.sdk');
    }

    public function accelerator()
    {
        return view('layouts.pages.accelerator');
    }

    public function bot()
    {
        return view('layouts.pages.bot');
    }

    public function legal()
    {
        return view('layouts.pages.legal');
    }

    public function join()
    {
        return view('layouts.pages.join');
    }

    public function talks()
    {
        return view('layouts.pages.talks');
    }

    public function soon()
    {
        return view('layouts.pages.pages');
    }

        public function sales()
    {
        return view('layouts.pages.pages');
    }




}