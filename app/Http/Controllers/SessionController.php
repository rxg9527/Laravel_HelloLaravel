<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->flash('success', '欢迎回来！');
            // 使用 Laravel 提供的 Auth::user() 方法来获取当前登录用户的信息，并将数据传送给路由。
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back();
        }

    }
}
