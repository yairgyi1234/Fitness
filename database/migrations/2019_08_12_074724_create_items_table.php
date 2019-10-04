<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('quantity');
             
            $table->unsignedInteger('stock_id');
            $table->foreign("stock_id")->references("id")->on("stocks")->onDelete("Cascade");

            $table->unsignedInteger('voucher_id');
            $table->foreign("voucher_id")->references("id")->on("vouchers")->onDelete("Cascade");

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
        Schema::dropIfExists('items');
    }
}
