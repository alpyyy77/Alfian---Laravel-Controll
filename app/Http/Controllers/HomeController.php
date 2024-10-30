<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login() {
        return view('login');
    }

    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
}
