<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('number');
            $table->enum('status', ['pending', 'confirmed', 'delivered', 'dispatched', 'cancelled']);
            $table->enum('payment_method', ['cod', 'card']);
            $table->boolean('payment_status');
            $table->text('shipping_address');
            $table->text('billing_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
