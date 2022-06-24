<!DOCTYPE htnl>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<link rel=stylesheet href=/css/blogcss.css>
</head>
<body>
<!--header start-->
<header>
    <h1><span>@yield('title2')</span></h1>
</header>
<!--header end-->
<!--contents start-->
<div id="wrapper">
    <div class="contents">
    @yield('content')
    </div>
</div>
<!--contents end-->
</body>
</html>
