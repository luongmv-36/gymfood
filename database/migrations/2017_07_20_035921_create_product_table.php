<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price', 8, 2);
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->string('images')->nullable();
            $table->string('images_zoom')->nullable();
            $table->longText('description');
            $table->text('short_description');
            $table->tinyInteger('active');
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
        Schema::dropIfExists('products');

    }
}
