@extends('layouts.app')

@section('title')
    Sửa comment {{ $id }}
@endsection
@section('content')
    <form name="submit-product" action="{{ url('/comment/'.$id) }}" method="post">
        <div class="form-group">
            <label >Comment</label>
            <input type="text" name="text" value="{{ $comment->text }}" class="form-control" placeholder="Nhập comment">
        </div>
        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection