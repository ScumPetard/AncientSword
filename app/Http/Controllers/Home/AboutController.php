<?php

namespace App\Http\Controllers\Home;

use App\Models\Honor;
use App\Models\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return view('home.about.about');
    }

    /**
     * 企业荣誉
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function honor()
    {
        try {
            $honors = Honor::orderBy('sort','desc')->get();
            return view('home.about.honor',compact('honors'));
        } catch (\Exception $exception){
            return view('errors.500');
        }
    }

    /**
     * 新闻中心
     * 
     * @return \Illuminate\Contracts\View\Factory
     * \Illuminate\View\View
     */
    public function news()
    {
        try {
            $hots = News::orderBy('created_at','desc')->limit(5)->get();
            $news = News::orderBy('created_at','desc')->paginate(4);
            return view('home.about.news',compact('news','hots'));
        } catch (\Exception $exception){
            return view('errors.500');
        }
    }

    /**
     * 新闻详情页
     *
     * @param $id
     */
    public function news_detail($id)
    {
        try {
            /** @var 查询出新闻 $news */
            $news = News::find($id);

            /** 判断此新闻是否存在 */
            if (!$news) {
                throw new \Exception('不存在的新闻');
            }
            $hots = News::orderBy('created_at','desc')->limit(5)->get();
            return view('home.about.newsdetail',compact('news','hots'));
        } catch (\Exception $exception){
            return view('errors.500');
        }
    }

    public function sales()
    {
        return view('home.about.sales');
    }
}
