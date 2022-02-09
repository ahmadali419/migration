<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentBookingOrderLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_booking_order_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index('user_id')->nullable();
            $table->unsignedInteger('category_id')->index('category_id');
            $table->unsignedInteger('store_id')->index('store_id');
            $table->unsignedInteger('booking_id')->index('booking_id');
            $table->string('name',100)->nullable();
            $table->string('email',150)->nullable();
            $table->string('phone',20)->nullable();
            $table->decimal('total_price',10,2)->nullable();
            $table->decimal('paid_amount',10,2)->nullable();
            $table->decimal('paid_percentage',10,2)->nullable();
            $table->text('address')->nullable();
            $table->text('country',20)->nullable();
            $table->text('city',200)->nullable();
            $table->text('state',150)->nullable();
            $table->text('zip_code',50)->nullable();
            $table->text('card_owner_name',200)->nullable();
            $table->text('card_number',20)->nullable();
            $table->text('card_exp_month',20)->nullable();
            $table->text('card_exp_year',20)->nullable();
            $table->enum('status',['pending','declined','approved'])->default('pending');
            $table->enum('payment',['verified','unverified'])->default('unverified');
            $table->enum('payment_type',['partial','full'])->default('full')->nullable();
            $table->tinyInteger('is_verified')->unsigned()->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('orderfulfillment_booking_order_logs');
    }
}
