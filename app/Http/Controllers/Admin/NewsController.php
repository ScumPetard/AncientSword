<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Tools\Tools;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        try {
            /** @var 获取所有新闻 $newss */
            $newss = News::all();
            /** 返回视图 */
            return view('admin.news.index',compact('newss'));
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function create(Request $request)
    {
        try {
            
            if ($request->isMethod('get')) {
                return view('admin.news.create');
            }
            
            /** @var 获取提交的所有数据 $data */
            $data = $request->all();

            /** @var 获取图片上传资源 $imageResource */
            $imageResource = Tools::fileMove($request,'preview','news');
            /** 判断是否上传成功 */
            if (!$imageResource) {
                throw new \Exception('图片上传失败');
            }
            /** 替换图片地址 */
            $data['preview'] = '/' . $imageResource->filePath;
            /** 添加进数据库 */
            $news = News::create($data);
            /** 判断是否上传成功 */
            if ($news) {
                return Tools::notifyTo('添加成功','success','/admin/news');
            }
            /** 失败抛出异常 */
            throw new \Exception('添加新闻失败');
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function edit(Request $request,$id)
    {
        try {

            /** Get 方式请求 */
            if ($request->isMethod('get')) {

                /** @var 查找news $news */
                $news = News::find($id);

                /** 判断是否存在 */
                if(!$news) {
                    throw new \Exception('不存在的新闻');
                }

                /** 返回视图 */
                return view('admin.news.edit',compact('news'));
            }

            /** @var 拼接更新数组 $imageResource */
            $data = [
                'title' => $request->get('title'),
                'author' => $request->get('author'),
                'category' => $request->get('category'),
                'intro' => $request->get('intro'),
                'content' => $request->get('content'),
            ];
            /** @var 获取上传图片资源 $imageResource */
            $imageResource = Tools::fileMove($request,'preview','news');
            /** 判断是否上传成功 */
            if ($imageResource) {
                $data['preview'] = '/' . $imageResource->filePath;
            }
            /** 更新数据 */
            News::where('id',$id)->update($data);
            /** 返回 */
            return Tools::notifyTo('修改成功','success','/admin/news');
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function destroy($id)
    {
        News::destroy($id);
        return Tools::notifyTo('删除成功');
    }
}
