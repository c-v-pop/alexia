<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contraindications()
    {
        return view('contraindications'); 
    }

    public function gallery()
    {
        return view('gallery');
    }
    public function policies()
    {
        return view('policies');
    }

    public function treatments()
    {
        return view('treatments');
    }
    public function facialTreatments()
    {
        return view('facial-treatments');
    }
    public function eyebrowsStyling()
    {
        return view('eyebrows-styling');
    }
    public function PermanentMakeup()
    {
        return view('permanent-makeup');
    }
    public function aestheticTreatments()
    {
        return view('aesthetic-treatments');
    }
}

