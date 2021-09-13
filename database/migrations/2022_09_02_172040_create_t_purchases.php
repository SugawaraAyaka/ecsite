<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPurchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('purchase_price')->comment('仕入れ価格');
            $table->integer('purchase_quantity')->comment('仕入れ個数');
            $table->string('purchase_company')->comment('仕入れ先会社');
            $table->string('description')->comment('商品説明');
            $table->timestamp('order_date')->comment('発送日');
            $table->timestamp('purchase_date')->nullable()->comment('納入日');
            $table->bigInteger('product_id')->unsigned()->comment('商品ID');
            $table->timestamps();
            $table->foreign('product_id')
                  ->references('id')
                  ->on('m_products')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_purchases');
    }
}
