@extends('layouts.helloapp') 

@section('title', 'Index') 

@section('menuber')  
@parent 
インデックスページ 
@endsection 

@section('content')
<p>ここが本文のコンテンツです。</p>
<p>必要な記述ができる</p>
@include('component.message',['msg_title'=>'OK','msg_content'=>'サブビューです。'])

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection