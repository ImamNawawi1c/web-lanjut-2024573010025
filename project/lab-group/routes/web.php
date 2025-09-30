<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {

    route::get('/', 'home')->name('home');
    route::get('/about', 'about')->name('about');
    route::get('contact', 'contact')->name('contact');

});
  