<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('member_id');
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('city');
            $table->date('order_date')->default(\Carbon\Carbon::now());
            $table->integer('ongkir');
            $table->string('ship_address');
            $table->boolean('isPaid')->default(false);
            $table->boolean('isShipped')->default(false);
            $table->timestamps();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
