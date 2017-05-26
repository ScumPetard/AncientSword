<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Tools\Tools;
use Bican\Roles\Models\Permission;
use Bican\Roles\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function login(Request $request)
    {
        try {
            if ($request->isMethod('get')) {
                return view('admin.index.login');
            }

            if (Auth::attempt([
                'email' => $request->get('email'),
                'password' => $request->get('password'),
                'enable' => 1
            ])) {
                return Tools::notifyTo('欢迎登陆 ~ [' . Auth::user()->name . ']', 'info', '/admin/index');
            }
            return Tools::notifyTo('登录失败 , 此账号被停用或账号错误!', 'error');
        } catch (\Exception $exception) {
            return Tools::notifyTo($exception->getMessage(), 'error');
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return Tools::notifyTo('你已经安全退出', 'info', '/admin');
        } catch (\Exception $exception) {
            return Tools::notifyTo($exception->getMessage(),'error');
        }
    }

    /**
     * 主页
     * @return \Illuminate\Contracts\View\Factory
     * \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index.index');
    }

    public function upload(Request $request)
    {
        try {
            return 1;
        } catch (\Exception $exception){
            return Tools::notifyTo($exception->getMessage(), 'danger');
        }
    }

}
