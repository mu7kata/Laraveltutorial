<html>

<head>
  <title>Hello/Index</title>
  <style>
    body {
      font-size: 16pt;
      color: #999;
    }

    h1 {
      font-size: 100px;
      text-align: center;
      color: #F6f6f6;
      margin: 50px;
    }
  </style>
</head>

<body>
  <h1>blade／index</h1>
 <p>&#064;foreachディレlうとりの例</p>
<ol>
 @foreach($data as $item)
<li>{{$item}}</li>
 @endforeach 
</ol>
</body>
</html>