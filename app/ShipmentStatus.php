<?php

namespace App;

use App\OrderDetail;
use Illuminate\Database\Eloquent\Model;

class ShipmentStatus extends Model
{
    protected $table = 'm_shipment_statuses';
    protected $fillable = ['shipment_status_name'];

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
