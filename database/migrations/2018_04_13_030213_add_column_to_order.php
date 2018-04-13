<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('invoice_id')->nullable()->after('payment_method');
            $table->integer('shipment_id')->nullable()->after('payment_method');;
            $table->string('bill_name')->after('payment_method');;
            $table->string('ship_name')->after('payment_method');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('invoice_id');
            $table->dropColumn('shipment_id');
            $table->dropColumn('bill_name');
            $table->dropColumn('ship_name');
        });
    }
}
