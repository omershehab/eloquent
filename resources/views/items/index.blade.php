@extends('layout.master')
@section('title', ' items page')
@section('content')
<h1>items page</h1>
<br><br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">titel</th>
            <th scope="col">body</th>
            <th scope="col">Control</th>
        </tr>
    </thead>
    <tbody>


        @foreach ($items as $item)
            <tr>

                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->body }}</td>
                <td>
                    <a href="{{ route('items.edit', $item->id) }}">Edit</a>

                    <form action="{{ route('items.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection

