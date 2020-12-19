@extends('layouts.helloapp')
<style>
    .pagination { font-size:12pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>
@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
	@if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
    @else
    <p>※未ログイン（<a href="/login">ログイン</a>｜
        <a href="/register">登録</a>）</p>
    @endif
    <div class ='optioin' > 
   <a href="/hello/add" class="btn btn--orange">新規作成</a>
   <p>登録者数：{{$one}}名</p>
    </div>

    <div>
    <table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
        <th>edit</th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
            <td><a href="/hello/edit?id={{$item->id}}">編集</a></td>
      
        </tr>
    @endforeach
    </table>

    {{ $items  ->appends(['sort' => $sort])->links() }}
    </div>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
