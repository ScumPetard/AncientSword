<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return view('home.about.about');
    }

    public function honor()
    {
        return view('home.about.honor');
    }

    public function news()
    {
        return view('home.about.news');
    }

    public function sales()
    {
        return view('home.about.sales');
    }
}
