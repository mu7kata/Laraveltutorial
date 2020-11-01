@extends('layouts.helloapp') 

@section('title', 'Index') 

@section('menuber')  
@parent 
インデックスページ 
@endsection 

@section('content')
<p>ここが本文のコンテンツです。</p>
<p>必要な記述ができる</p>
@component('component.message')
 @slot('msg_title')
 CAUTION!
 @endslot

 @slot('msg_content')
 これはメッセージの表示です。
 @endslot

@endcomponent

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection