@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>これは、<middleware>google.com</middleware>へのりんくです。</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのりんくです。</p>
@endsection

@section('footer')
  copyright 2020 tuyano.    
@endsection