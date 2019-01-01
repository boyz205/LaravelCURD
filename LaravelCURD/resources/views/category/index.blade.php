@extends('layouts.app')

@section('title')
    Danh sách danh mục
@endsection
@section('content')
    <h2>
        <a href="{{ url('/category/create') }}" class="btn btn-info">Add</a>
    </h2>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>


        @foreach ($cats as $cat)
            <tr>
                <th scope="row">{{ $cat->id }}</th>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->created_at }}</td>
                <td>
                    <a href="{{ url('/category/'.$cat->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/category/'.$cat->id.'/delete') }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{ dump($cats) }}
    {{--{{ dd($cats) }}--}}
    {{--{{ var_dump($cats) }}--}}
@endsection