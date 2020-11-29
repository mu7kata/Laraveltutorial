@extends('layouts.helloapp')

@section('title','Show')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')

@if ($items != null)
@foreach($items as $item)
<table width ="400px">
<tr>
<tr><th width ="400px">id:</th><td width ="400px">{{$item->id}}</td></tr>
<tr><th width ="400px"> name:</th><td>{{$item->name}}</td></tr>
</tr>
</table>
@endforeach
@endif

@endsection

@section('footer')
copyright 2020

@endsection