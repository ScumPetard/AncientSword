<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InteractiveController extends Controller
{
    public function video()
    {
        return view('home.interactive.video');
    }

    public function work()
    {
        return view('home.interactive.work');
    }

    public function contact()
    {
        return view('home.interactive.contact');
    }
}
