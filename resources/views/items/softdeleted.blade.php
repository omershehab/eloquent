@extends('layout.master')
@section('title', ' SOFT DELETED')
@section('content')
<h1>SOFT DELETED ITEMS PAGE</h1>
<br><br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titel</th>
            <th scope="col">body</th>
            <th scope="col">deleted At</th>
            <th scope="col"> action</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($items as $item)
            <tr>

                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->body }}</td>
                <td>{{ $item->deleted_at }}</td>
                <td>  <a href="{{route('item.restore', $item->id) }}" class="">restore</a>  </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection

