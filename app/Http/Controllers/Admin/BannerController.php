<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Tools\Tools;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index()
    {
        try {
            /** @var 获取所有轮播图 $banners */
            $banners = Banner::all();
            /** 返回视图 */
            return view('admin.banner.index',compact('banners'));
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function create(Request $request)
    {
        try {
            /** @var 获取提交的所有数据 $data */
            $data = $request->all();
            /** @var 获取图片上传资源 $imageResource */
            $imageResource = Tools::fileMove($request,'url','banner');
            /** 判断是否上传成功 */
            if (!$imageResource) {
                throw new \Exception('图片上传失败');
            }
            /** 替换图片地址 */
            $data['url'] = '/' . $imageResource->filePath;
            /** 添加进数据库 */
            $banner = Banner::create($data);
            /** 判断是否上传成功 */
            if ($banner) {
                return Tools::notifyTo('添加成功');
            }
            /** 失败抛出异常 */
            throw new \Exception('添加轮播图失败');
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function edit(Request $request,$id)
    {
        try {

            /** @var 拼接更新数组 $imageResource */
            $data = [
                'name' => $request->get('name'),
                'link' => $request->get('link'),
                'sort' => $request->get('sort')
            ];
            /** @var 获取上传图片资源 $imageResource */
            $imageResource = Tools::fileMove($request,'url','banner');
            /** 判断是否上传成功 */
            if ($imageResource) {
                $data['url'] = $imageResource->filePath;
            }
            /** 更新数据 */
            Banner::where('id',$id)->update($data);
            /** 返回 */
            return Tools::notifyTo('修改成功');
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function destroy($id)
    {
        Banner::destroy($id);
        return Tools::notifyTo('删除成功');
    }
}
