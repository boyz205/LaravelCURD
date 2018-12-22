@extends('layouts.app')

@section('title')
    Sửa danh mục {{ $id }}
@endsection
@section('content')
    <form name="submit-category" action="{{ url('/category/').$id }}" method="post">
        <div class="form-group">
            <label >Tiêu đề</label>
            <input type="text" class="form-control" placeholder="Nhập tiêu đề">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection