<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 't_orders_details';
    protected $fillable = ['products_id', 'order_id', 'shipment_status_id', 'order_detail_number', 'order_quantity', 'shipment_date'];

    // public function mproduct()
    // {
    //     return $this->belongsTo(Mproduct::class);
    // }

    public function shipmentStatus()
    {
        return $this->belongsTo(ShipmentStatus::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
