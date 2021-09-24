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
            $table->unsignedBigInteger('user_id');
            $table->string('delivery_address')->nullable();
            $table->string('payment_details')->nullable();
            $table->decimal('amount', 8, 2);
            $table->decimal('discount')->default(0);
            $table->decimal('vat')->default(0);
            $table->decimal('total_amount', 8, 2);
            $table->date('order_date')->nullable();
            $table->enum('status', ['pending', 'on-process', 'on-delivery', 'delivered', 'completed', 'cancel']);
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
        Schema::dropIfExists('orders');
    }
}
