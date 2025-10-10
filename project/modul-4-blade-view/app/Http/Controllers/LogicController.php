<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function show()
    {
        $isLoggedIn = true;
        $users = [
            ['name' => 'Imam', 'role' => 'admin'],
            ['name' => 'Ilham', 'role' => 'editor'],
            ['name' => 'Faiz', 'role' => 'subscriber'],

        ];
        $products = []; //Simulasi array kosong untuk @forelse
        $profile = [
            'name' => 'Imam',
            'email' => 'Imam@pnl.ac.id'
        ];
        $status = 'active';

        return view ('logic', compact('isLoggedIn', 'users', 'products', 'profile', 'status'));
    }
}
