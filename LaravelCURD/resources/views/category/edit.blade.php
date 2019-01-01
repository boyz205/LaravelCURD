@extends('layouts.app')

@section('title')
    Sửa category {{ $id }}
@endsection
@section('content')
    <form name="submit-category" action="{{ url('/category/').$id }}" method="post">
        <div class="form-group">
            <label >Tiêu đề</label>
            <input type="text" name="name" value="{{ $cat->name }}" class="form-control" placeholder="Nhập tiêu đề">
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection