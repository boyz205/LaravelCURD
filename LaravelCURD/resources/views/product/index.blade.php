@extends('layouts.app')

@section('title')

@endsection
@section('content')
    <h1> Gio Hang</h1>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">So luong</th>
            <th scope="col">Gia</th>
            <th scope="col">Thanh tien</th>
            <th scope="col"> Action</th>
        </tr>
        </thead>
        <?php
        /*         echo '<pre>';
                 print_r($contents);
                 echo '</pre>';
                 die();*/
        ?>

        @foreach ($contents as $item)
            <tr>
                <th scope="row">{{ $item["id"]}}</th>
                <td>{{ $item["name"]}}</td>
                <td>
                    <form name="submit-product" action="{{ url('/editcart/'.$item["id"])}}" method="post">
                        <input type="text" name="quantity" value="{{$item["quantity"]}}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>


                    {{--                   // {{$item["quantity"]}}--}}
                </td>
                <td>{{number_format($item["price"],0,",",".") }}</td>
                <td>{{number_format($item["price"]*$item["quantity"],0,",",".")}}</td>
                <td>
                    <a href="{{ url('/cart/'.$item["id"].'/delete') }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <h1> DAnh sach san pham</h1>
    <h2>
        <a href="{{ url('/product/create') }}" class="btn btn-info">Add</a>
    </h2>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Action</th>
            <th scope="col"> Cart</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $viewcats[$product->cat_id]->name }}</td>
                <td>{{ $product->time }}</td>
                <td>

                    <a href="{{ url('/product/'.$product->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/product/'.$product->id.'/delete') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>


                    <form name="submit-product" action="{{ url('/productcart/'.$product->id) }}" method="post">
                        <a href="#" > <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        <input type="text" name="number" value="1">
                        @csrf
                        <button type="submit" class="btn btn-primary">Add to cart</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{ dump($products) }}
    {{--{{ dd($cats) }}--}}
    {{--{{ var_dump($cats) }}--}}
@endsection