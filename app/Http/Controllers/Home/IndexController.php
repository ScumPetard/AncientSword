<?php

namespace App\Http\Controllers\Home;

use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        try {
            $video = Video::find(1);
            $news = News::orderBy('created_at','desc')->limit(3)->get();
            return view('home.index.index',compact('video','news'));
        } catch (\Exception $exception){
            
        }
    }
}
