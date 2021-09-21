@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="p-3 border rounded-lg">
        <h3></h3>
        <p>〒{{ $user->zipcode }}</p>
        <p>{{ $user->last_name }}{{ $user->first_name }}様</p>
    </div>
    <div class="py-3">
    </div>
    <div class="text-right px-3 my-3">
        <form action="#" method="post" onsubmit="return checkText()">
        @csrf
            <button type="submit" id="add_delete" class="btn btn-danger">注文をキャンセルする</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">商品名</th>
                <th class="text-center">商品カテゴリー</th>
                <th class="text-center">値段</th>
                <th class="text-center">個数</th>
                <th class="text-center">小計</th>
                <th class="text-center">備考</th>
            </tr>
        </thead>
        <tbody class="text-center border-bottom">
            @foreach( $orderDetails as $orderDetail )
            @php
                $total = $orderDetail->product->price * $orderDetail->order_quantity;
            @endphp
            <tr>
                <th scope="row">{{ $orderDetail->product->id }}</th>
                <td>{{ $orderDetail->product->product_name }}</td>
                <td>{{ $orderDetail->product->category->category_name }}</td>
                <td>{{ $orderDetail->product->price }}円</td>
                <td>{{ $orderDetail->order_quantity }}個</td>
                <td>{{ $total }}円</td>
                <td>商品状態：
                </td>
            </tr>
        </tbody>
        <tbody class="text-center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計</td>
                <td> xxx,xxx円</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right px-3 my-3">
        <a href="#" class="btn btn-primary">注文履歴に戻る</a>
    </div>
</div>
@endsection
