@extends('layouts.app')

@section('title')
    Danh sách Comment
@endsection
@section('content')

    <h2>
        <a href="{{ url('/comment/create') }}" class="btn btn-info">Add Comment</a>
    </h2>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Product_id</th>
            <th scope="col">Text</th>
            <th scope="col">Time</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>


        @foreach ($comments as $comment)
            <tr>
                <th scope="row">{{ $comment->id }}</th>
                <td>{{ $comment->product_id }}</td>
                <td>{{ $comment->text }}</td>
                <td>{{ $comment->time }}</td>
                <td>
                    <a href="{{ url('/comment/'.$comment->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/comment/'.$comment->id.'/delete') }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection