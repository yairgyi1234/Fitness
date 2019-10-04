<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code');
            $table->bigInteger('subtotal');
            $table->string('remark');
            $table->bigInteger('total');
            
            $table->unsignedInteger('customer_id');
            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("Cascade");
   
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
        Schema::dropIfExists('vouchers');
    }
}
