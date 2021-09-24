<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\OrderDetail;
use App\User;
use Carbon\Carbon;

class OrdersController extends Controller
{
    public function index()
    {
        $carbon     = new Carbon();
        $now        = $carbon->now();
        $threeMonth = $carbon->subMonth(3);

        // $user=Auth::id();
        // $orders = TOrder::whereBetween('created_at',[$now, $threeMonth])
        //         ->where('user_id', $user)
        //         ->get();
        // $orders = TOrder::where('user_id', $user)->get();

        //仮でユーザー１の注文履歴表示
        $orders = Order::where('user_id', 1)
        ->with(['user', 'orderDetail.shipmentStatus'])
        ->whereBetween('updated_at',[$threeMonth, $now])
        ->orderBy('updated_at', 'desc')
        ->paginate(15);
        return view('shopping.order_history', ['orders' => $orders]);
    }

    public function detail($id)
    {
        $orders = Order::findOrFail($id);
        $details = $orders->orderDetail;
        foreach($details as $detail){
            $productId = $detail->products_id;
            $orderQuantity = $detail->order_quantity;
            $orderDetailNumber = $detail->order_detail_number;
        }

        $orderDetails = OrderDetail::with('products')
        ->where('order_id', 1)
        ->get();
        $totalPrice = 0;
        foreach($orderDetails as $orderDetail){
            $price = $orderDetail->product['price'];
            $orderQuantity = $orderDetail->product['order_quantity'];
            $total = $price * $orderQuantity;
            $totalPrice += $total;
        }
        $user = $orders->user;
        return view('shopping.order_history_detail', compact('user','details', 'orderDetails', 'totalPrice'));
    }
}
