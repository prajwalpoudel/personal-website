<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('front.index');
    }

    public function about() {
        return view('front.about');
    }

    public function blogs() {
        return view('front.blogs');
    }

    public function portfolio() {
        return view('front.portfolio');
    }

    public function contact() {
        return view('front.contact');
    }
}
