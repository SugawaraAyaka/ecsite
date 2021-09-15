@extends('layouts.app')
@section('content')
<div>
    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <h1>商品検索画面</h1>
        </div>
    </div>
    <form method="get" action="{{ route('search.products') }}">
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品名</h2>
                <input type="text" class="form-control" name="product_name" value="">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary ml-4">検索</button>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2>商品カテゴリ</h2>
                <select name="category_id" class="ml-2" style="width:50%; text-align-last:center;">
                    <option value="">未選択</option>
                    @foreach($categories as $id => $category_name)
                    <option value="{{ $id }}">
                        {{ $category_name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    @if (!empty($products))
        <p>全{{ $products->count() }}件</p>
        <table border="1" class="table" style="border-collapse: collapse">
        <thead class="bg-warning">
        <tr>
            <th>商品名</th>
            <th>商品カテゴリ</th>
            <th>価格</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <td>{{ $product->product_name }}</td>
            <tr>
                <td>{{ $product->category->category_name }}</td>
                <td>{{ $product->price }}円</td>
            </tr>
                <td name="name"><a href="#" class="btn btn-primary">商品詳細</a></td>
            @endforeach
        </tbody>
        </table>
    @endif
</div>
@endsection
