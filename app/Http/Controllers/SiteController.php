<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
    public function services() {
        return view('services');
    }
    public function portfolio() {
        return view('portfolio');
    }
    public function pricing() {
        return view('pricing');
    }
    public function blog() {
        return view('blog');
    }
    public function contact() {
        return view('contact');
    }

}
