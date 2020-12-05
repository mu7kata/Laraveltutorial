@extends('layouts.helloapp')
@section('title','Board.index')

@section('menubar')
@parent
ボードページ
@endsection

@section('content')

<table>
<tr><th>DAta</th></tr>
@foreach ($items as $item)

<tr>
<td>{{ $item -> message}}</td>
<td>{{ $item -> person->name}}</td>
</tr>
@endforeach
</table>
@endsection