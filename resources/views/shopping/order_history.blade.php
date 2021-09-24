@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <h2><span class="panel-heading badge badge-secondary mt-3 mb-2">直近3か月の注文を表示</span></h2>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>注文番号</th>
                    <th>お届け先</th>
                    <th>備考</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                    @foreach($order->orderDetail as $orderDetail)
                    {{ $orderDetail->order_detail_number }}
                    @endforeach
                    </td>
                    <td>
                        <p>〒{{ $order->user->zipcode }}</p>
                        <p>{{ $order->user->prefecture }}{{ $order->user->municipality }}{{ $order->user->address }}{{ $order->user->apartments }}</p>
                    </td>
                    <td>
                        <p>注文日時：{{ $order->order_date }}</p>
                        <p>
                        @foreach($order->orderDetail as $orderDetail)
                        @if ($orderDetail->shipment_status_id === config('const.shipment_status_id.readyToShip'))
                        発送準備中
                        @elseif ($orderDetail->shipment_status_id === config('const.shipment_status_id.shippingCompleted'))
                        発送完了
                        @else
                        発送前
                        @endif
                        @endforeach
                        </p>
                    </td> 
                    <td>
                        <a class="btn btn-primary" href="{{ route('order_history_detail',$order->id) }}">詳細</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
