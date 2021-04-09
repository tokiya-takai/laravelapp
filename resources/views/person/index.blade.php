@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>Person</th>Board</tr>
    @foreach ($items as $item)
        <tr>
          <td>{{ $item->getData() }}</td>
          <td>@if ($item->board != null)
                {{ $item->board->getData() }}
              @endif
          </td>
        </tr>
    @endforeach
  </table>
@endsection

@section('footer')
    copylight 2020 tuyano.
@endsection