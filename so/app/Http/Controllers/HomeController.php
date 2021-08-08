<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function services(){
    return view('services');
    }

    public function contacts(){
        return view('contacts');
    }

    public function projects(){
        return view('projects');
    }

    public function about_me(){
        return view('about_me');
    }
}
