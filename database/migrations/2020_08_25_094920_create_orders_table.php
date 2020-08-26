<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('status_id')->constrained();
            $table->string('url');
            $table->string('qty');
            $table->string('color');
            $table->string('price');
            $table->string('size');
            $table->string('comment');
            $table->string('currency');
            $table->string('post_office')->nullable();
            $table->string('post_office_number')->nullable();

            $table->timestamps();
        });

//        Schema::table('orders',  function(Blueprint $table){
//
//            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('set null');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
