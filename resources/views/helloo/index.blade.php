@extends('layouts.helloapp') 

@section('title', 'Index') 

@section('menuber')  
@parent 
インデックスページ 
@endsection 

@section('content')
<p>{{$msg}}</p>
<table>
<form action="/helloo" method="post">
{{csrf_field()}}
<tr><th>name: </th></tr><input type="text" name="name">
<tr><th>mail: </th></tr><input type="text" name="mail">
<tr><th>age: </th></tr><input type="text" name="age">
<tr><th></th></tr><input type="submit" value="send">
</form>
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection