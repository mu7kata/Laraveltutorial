@extends('layouts.helloapp')
<style>
.pagination{font-size: 10pt;}
.pagination li {display: inline-block;}
</style>
@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<table>
<tr>
<th><a href="/hello?sort=name"></a>Name</th>
<th><a href="/hello?sort=mail"></a>Mail</th>
<th><a href="/hello?sort=age"></a>Age</th></tr>

@foreach ($items as $item)
<tr>
<td>{{$item->name}}</td>
<td>{{$item->mail}}</td>
<td>{{$item->age}}</td>
</tr>
@endforeach
</table>
{{$items->appends(['sort'=>$sort])->links()}}
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection