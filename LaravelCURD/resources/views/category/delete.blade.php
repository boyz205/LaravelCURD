@extends('layouts.app')

@section('title')
    Xóa danh mục số {{ $id }}
@endsection
@section('content')
    <form name="destroy-category" action="{{ url('/category/destroy/').$id }}" method="post">
        <button type="submit" class="btn btn-primary">Xóa</button>
    </form>
@endsection