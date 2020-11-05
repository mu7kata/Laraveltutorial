@extends('layouts.helloapp')

@section('title', 'Index')

@section('menuber')
@parent
インデックスページ
@endsection

@section('content')
<p>{{$msg}}</p>
@if(count($errors)> 0)
<p>入力に問題があります。再入力してください</p>
@endif
<table>
  <form action="/helloo" method="post">
    {{csrf_field()}}
    
   
      @if ($errors->has('name'))
    <tr>
      <th>Error</th>
      <td>{{$errors->first('name')}}</td>
    </tr>
    @endif
    <th>name: </th>
    </tr>
    <td><input type="text" name="name" value="{{old('name')}}"></td>
    <tr>
      @if ($errors->has('mail'))
    <tr>
      <th>Error</th>
      <td>{{$errors->first('mail')}}</td>
    </tr>
    @endif
    <th>mail: </th>
    </tr>
    <td><input type="text" name="mail" value="{{old('mail')}}"></td>
    <tr>
    
     
  
      @if ($errors->has('age'))
    <tr>
      <th>Error</th>
      <td>{{$errors->first('age')}}</td>
    </tr>
    @endif
    <th>age: </th>
    </tr>
    <td><input type="text" name="age" value="{{old('age')}}"></td>
  
    <th></th>
    </tr><input type="submit" value="send">
  </form>
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection