<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $message = "Welcome To Laravel!";
        return view('mywelcome', ['message' => $message]);
    }
}
