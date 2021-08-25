<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('manager/home');
    }
    public function home2() {
        return view('artisan/home2');
    }
}
