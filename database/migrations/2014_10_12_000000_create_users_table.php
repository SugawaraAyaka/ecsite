<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password', 64)->comment('パスワード');
            $table->string('last_name', 16)->comment('苗字');
            $table->string('first_name', 16)->comment('名前');
            $table->bigInteger('zipcode')->length(8)->comment('郵便番号');
            $table->string('prefecture', 16)->comment('都道府県');
            $table->string('municipality', 16)->comment('市町村区');
            $table->string('address', 32)->comment('番地');
            $table->string('apartments', 32)->comment('マンション、部屋番号')->nullable();
            $table->string('email', 128)->unique()->comment('メールアドレス');
            $table->bigInteger('phone_number')->comment('電話番号')->unsigned();
            $table->bigInteger('user_classification_id')->comment('ユーザ種別')->unsigned();
            $table->string('company_name', 128)->comment('会社名')->nullable();
            $table->char('delete_flag')->length(1)->comment('deleteフラグ');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('user_classification_id')->references('id')->on('users_classifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
