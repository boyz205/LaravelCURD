@extends('layouts.app')

@section('title')
    Thêm mới danh mục
@endsection
@section('content')
    <form name="submit-category" action="{{ url('/category') }}" method="post">
        <div class="form-group">
            <label >Tiêu đề</label>
            <input type="text" class="form-control" placeholder="Nhập tiêu đề">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection