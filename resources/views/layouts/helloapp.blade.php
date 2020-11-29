<html>
<head>
<title>@yield('title') </title>
<style>
body{font-size: 16pt; color:#999;}
h1{font-size:100px;text-align: center;color:#F6f6f6;margin:50px;}

th{
  background-color: #999;
  color: #fff;
  padding: 5px 10px;
}
td{
  border: solid 1px #aaa;
  background-color: #999;
  color: #fff;
  padding: 5px 10px;
}
</style>
</head>
<body>
  <h1>@yield('title') </h1>
  @section('menubar')
  <ul>
  <p class='menutitle'>※メニュー</p>
  <li>@show</li>
  </ul>

  <hr size="1">
  <div class="content">
  @yield('content') 
  </div>
  <div class="footer">
  @yield('footer') 
  </div>
</body>
</html>