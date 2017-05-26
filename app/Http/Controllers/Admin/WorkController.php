<?php

namespace App\Http\Controllers\Admin;

use App\Models\Work;
use App\Tools\Tools;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function index()
    {
        try {
            /** @var 获取所有招聘信息 $works */
            $works = Work::all();
            /** 返回视图 */
            return view('admin.work.index',compact('works'));
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function create(Request $request)
    {
        try {

            if ($request->isMethod('get')) {
                return view('admin.work.create');
            }

            /** @var 获取提交的所有数据 $data */
            $data = $request->all();

            /** 添加进数据库 */
            $work = Work::create($data);
            /** 判断是否上传成功 */
            if ($work) {
                return Tools::notifyTo('添加成功','success','/admin/work');
            }
            /** 失败抛出异常 */
            throw new \Exception('添加招聘信息失败');
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function edit(Request $request,$id)
    {
        try {

            /** Get 方式请求 */
            if ($request->isMethod('get')) {

                /** @var 查找work $work */
                $work = Work::find($id);

                /** 判断是否存在 */
                if(!$work) {
                    throw new \Exception('不存在的招聘信息');
                }

                /** 返回视图 */
                return view('admin.work.edit',compact('work'));
            }

            /** @var 拼接更新数组 $imageResource */
            $data = [
                'name' => $request->get('name'),
                'price' => $request->get('price'),
                'intro' => $request->get('intro')
            ];
            /** 更新数据 */
            Work::where('id',$id)->update($data);
            /** 返回 */
            return Tools::notifyTo('修改成功','success','/admin/work');
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

    public function destroy($id)
    {
        Work::destroy($id);
        return Tools::notifyTo('删除成功');
    }
}
