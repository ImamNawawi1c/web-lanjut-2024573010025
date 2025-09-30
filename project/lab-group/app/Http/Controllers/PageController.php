<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $message = "Welcome to homepage";
        return view('pages.home', compact('message'));
    }

    public function about()
    {
        $message = "this is a about page";
        return view('pages.about', compact('message'));
    }

    public function contact()
    {
        $message = "Reach us through the contact page.";
        return view('pages.contact', compact('message'));
    }
}
