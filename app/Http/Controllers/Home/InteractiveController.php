<?php

namespace App\Http\Controllers\Home;

use App\Models\Video;
use App\Models\Work;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InteractiveController extends Controller
{
    public function video()
    {
        $videos = Video::orderBy('id','desc')->get();
        return view('home.interactive.video',compact('videos'));
    }

    public function work()
    {
        $works = Work::all();
        return view('home.interactive.work',compact('works'));
    }

    public function contact()
    {
        return view('home.interactive.contact');
    }
}
