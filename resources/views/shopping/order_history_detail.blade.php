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
    @if(isset ($details))
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">注文番号</th>
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
                $total = $orderDetail->products->price * $orderDetail->order_quantity;
                $totalPrice += $total;
            @endphp
            <tr>
                <th scope="row">{{ $orderDetail->products->id }}</th>
                <td>{{ $orderDetail->order_detail_number }}</td>
                <td>{{ $orderDetail->products->product_name }}</td>
                <td>{{ $orderDetail->products->category->category_name }}</td>
                <td>{{ $orderDetail->products->price }}円</td>
                <td>{{ $orderDetail->order_quantity }}個</td>
                <td>{{ $total }}円</td>
                <td>商品状態：
                @if ($orderDetail->shipment_status_id === config('const.shipment_status_id.readyToShip'))
                発送準備中
                @elseif ($orderDetail->shipment_status_id === config('const.shipment_status_id.shippingCompleted'))
                発送完了
                @else
                発送前
                @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        <tbody class="text-center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計</td>
                <td>{{ $totalPrice }}円</td>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
    </table>
    @endif
    <div class="text-right px-3 my-3">
        <a href="{{ route('order_history') }}" class="btn btn-primary">注文履歴に戻る</a>
    </div>
</div>
@endsection
