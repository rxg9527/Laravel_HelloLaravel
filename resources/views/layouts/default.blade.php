<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <!-- @include 是 Blade 提供的视图引用方法，可通过传送一个具体的文件路径名称来引用视图。 -->
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        <!-- 下面的这行代码表示该占位区域将用于显示 content 区块的内容，而 content 区块的内容将由继承自 default 视图的子视图定义。 -->
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>
</html>
