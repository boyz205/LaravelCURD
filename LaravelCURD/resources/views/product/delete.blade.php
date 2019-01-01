@extends('layouts.app')

@section('title')
    Xóa product số {{ $id }}
@endsection
@section('content')
    <form name="destroy-product" action="{{ url('/product/destroy/'.$id) }}" method="post">
        <button type="submit" class="btn btn-primary">Xác nhận xóa</button>

        @csrf
    </form>
@endsection