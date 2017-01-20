<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample') - Laravel 入门教程</title>
  </head>
  <body>
    <!-- 下面的这行代码表示该占位区域将用于显示 content 区块的内容，而 content 区块的内容将由继承自 default 视图的子视图定义。 -->
    @yield('content')
  </body>
</html>
