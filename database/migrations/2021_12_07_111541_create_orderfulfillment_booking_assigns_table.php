<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentBookingAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_booking_assigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->index('booking_id')->nullable()->constrained('orderfulfillment_bookings');
            $table->unsignedInteger('slot_id')->index('slot_id')->nullable();
            $table->unsignedInteger('user_id')->index('user_id')->nullable();
            $table->date('date')->nullable();
            $table->enum('assign_status',['pending', 'in progress', 'not respond', 'completed'])->default('pending')->nullable();
            $table->unsignedInteger('created_by')->nullable();
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
        Schema::dropIfExists('orderfulfillment_booking_assigns');
    }
}
