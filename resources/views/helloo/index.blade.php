@extends('layouts.helloapp') 

@section('title', 'Index') 

@section('menuber')  
@parent 
インデックスページ 
@endsection 

@section('content')
<p>ここが本文のコンテンツです。</p>
<p>Contoroller value<br>'view_message'= {{$view_message}}</p>

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection