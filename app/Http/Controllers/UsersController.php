<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            //  Laravel 开发中，提供了多种数据验证方式，在本教程中，我们使用其中一种对新手较为友好的验证方式 - validator 来进行讲解。
            // validator 由 App\Http\Controllers\Controller 类中的 ValidatesRequests 进行定义，因此我们可以在所有的控制器中使用 validate 方法来进行数据验证。
            // validate 方法接收两个参数，第一个参数为用户的输入数据，第二个参数为该输入数据的验证规则。
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required'
        ]);
        return;
    }
}
