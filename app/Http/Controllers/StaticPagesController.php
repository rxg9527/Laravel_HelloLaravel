<?php

namespace App\Http\Controllers;

// 用 use 来引用在 PHP 文件中要使用的类，引用之后便可以对其进行调用。
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home () {
        // 下面这行代码，将会渲染在 resources/views 文件夹下的 static_pages/home.blade.php 文件。默认情况下，所有的视图文件都存放在 resources/views 文件夹下。
        return view('static_pages/home');
    }

    public function help () {
        return view('static_pages/help');
    }

    public function about () {
        return view('static_pages/about');
    }
}
