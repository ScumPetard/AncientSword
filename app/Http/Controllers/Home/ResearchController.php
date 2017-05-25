<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResearchController extends Controller
{
    public function base()
    {
        return view('home.research.base');
    }

    public function culture()
    {
        return view('home.research.culture');
    }
}
