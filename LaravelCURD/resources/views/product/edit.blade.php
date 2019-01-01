@extends('layouts.app')

@section('title')
    Sửa product {{ $id }}
@endsection
@section('content')
    <form name="submit-product" action="{{ url('/product/'.$id) }}" method="post">
        <div class="form-group">
            <label >Tiêu đề</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nhập tiêu đề">
        </div>
        <div class="form-group">
            <label >Danh mục</label>
            <select name="cat_id" style="min-width: 300px">
                <option value="">None</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}" <?php echo ($product->cat_id == $cat->id) ? 'selected' : '' ?>>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label >Giá</label>
            <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Nhập giá">
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection