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
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>
            <a href="{{ url('/category/1/edit') }}" class="btn btn-warning">Edit</a>
            <a href="{{ url('/category/1/delete') }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>
            <a href="{{ url('/category/2/edit') }}" class="btn btn-warning">Edit</a>
            <a href="{{ url('/category/2/delete') }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>
            <a href="{{ url('/category/3/edit') }}" class="btn btn-warning">Edit</a>
            <a href="{{ url('/category/3/delete') }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    </tbody>
</table>
@endsection