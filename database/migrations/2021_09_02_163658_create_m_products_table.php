<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 64)->comment('商品名');
            $table->bigInteger('category_id')->unsigned()->comment('カテゴリーID');
            $table->integer('price')->comment('販売単価');
            $table->string('description', 256)->comment('商品説明');
            $table->bigInteger('sale_status_id')->unsigned()->comment('販売状態');
            $table->bigInteger('product_status_id')->unsigned()->comment('商品状態');
            $table->timestamp('regist_date')->nullable()->comment('商品登録日');
            $table->bigInteger('user_id')->unsigned()->comment('ユーザーID');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));     

            $table->foreign('category_id')
                ->references('id')
                ->on('m_categories')
                ->onDelete('cascade');
            $table->foreign('sale_status_id')
                ->references('id')
                ->on('m_sale_statuses')
                ->onDelete('cascade');
            $table->foreign('product_status_id')
                ->references('id')
                ->on('m_product_statuses')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('m_products');
    }
}
