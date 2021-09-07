<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTOrdersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_orders_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('products_id')->comment('商品ID')->unsigned();
            $table->biginteger('order_id')->comment('注文ID')->unsigned();
            $table->biginteger('shipment_status_id')->comment('発送状態')->unsigned();
            $table->integer('order_detail_number')->length(64)->comment('注文番号');
            $table->integer('order_quantity')->comment('注文個数');
            $table->timestamp('shipment_date')->comment('発送日');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('t_orders')->onDelete('cascade');
            $table->foreign('shipment_status_id')->references('id')->on('m_shipment_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_orders_details');
    }
}
