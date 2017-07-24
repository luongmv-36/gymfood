<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('orders',function (Blueprint $table){
           $table->increments('id');
           $table->enum('status',['pending', 'processing','complete','cancel']);
           $table->decimal('total', 20, 2)->unsigned();
           $table->integer('customer_id')->nullable();
           $table->string('shipping_method');
           $table->string('payment_method');
           $table->timestamps();
       });
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('qty')->unsigned();
            $table->decimal('price', 20, 2)->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
        Schema::create('order_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('zip')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->string('passcode')->nullable();
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_address');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
}
