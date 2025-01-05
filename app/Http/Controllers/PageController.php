<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function gallery()
    {
        return view('gallery');
    }
    public function policies()
    {
        return view('policies');
    }

    public function pricelist()
    {
        return view('pricelist');
    }

    public function treatments()
    {
        return view('treatments');
    }
}

