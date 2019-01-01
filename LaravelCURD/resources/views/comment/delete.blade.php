@extends('layouts.app')

@section('title')
    Xóa comment số {{ $id }}
@endsection
@section('content')
    <form name="destroy-product" action="{{ url('/comment/destroy/'.$id) }}" method="post">
        <button type="submit" class="btn btn-primary">Xác nhận xóa</button>

        @csrf
    </form>
@endsection