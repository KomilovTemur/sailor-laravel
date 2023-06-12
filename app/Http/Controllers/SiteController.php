<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('index', compact('services'));
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
