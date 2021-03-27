@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{ $msg }}</p>
  @if (count($errors) > 0)
  <div>
    <ul>
      <!--バリエーションエラーの場合に生成される$errorsを全て取り出す-->
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>        
      @endforeach
    </ul>
  </div>      
  @endif
  <form action="/hello" method="post">
    <table>
      @csrf
      <!-- oldメソッドによって、現在の値が設定される前の値を返す -->
      <tr><th>name: </th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>
      <tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>
@endsection

@section('footer')
  copyright 2020 tuyano.    
@endsection