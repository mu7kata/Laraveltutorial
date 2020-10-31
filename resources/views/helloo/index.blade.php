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
 <p>&#064;forディレlうとりの例</p>
 <ol>
@php 
$counter = 0;
@endphp 

@while ($counter < count($data))
<li>{{$data[$counter]}}</li>
 @php
 $counter++;
 @endphp
 @endwhile
 </ol>

</body>
</html>