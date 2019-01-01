@extends('layouts.app')

@section('title')
    Thêm mới Comment
@endsection
@section('content')
    <form name="submit-category" action="{{ url('/comment') }}" method="post">
        <div class="form-group">
            <label >Comment</label>
            <input type="text" name="text" value="" class="form-control" placeholder="Nhập comment">
        </div>
        <div class="form-group">
            <label >San Pham</label>
            <select name="product_id" style="min-width: 300px">
                <option value="">None</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection