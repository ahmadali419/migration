<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->index('category_id')->nullable()->constrained('categories');
            $table->date('date');
            $table->foreignId('time_slot_id')->index('time_slot_id')->nullable()->constrained('orderfulfillment_time_slots');
            $table->foreignId('zip_code_id')->index('zip_code_id')->nullable()->constrained('orderfulfillment_zip_codes');
            $table->string('first_name',150)->nullable();
            $table->string('last_name',150)->nullable();
            $table->string('email',150)->nullable();
            $table->string('phone_number',20)->nullable();
            $table->string('post_code',20)->nullable();
            $table->text('country',20)->nullable();
            $table->text('city',200)->nullable();
            $table->text('state',150)->nullable();
            $table->text('address')->nullable();
            $table->text('message')->nullable();
            $table->enum('booking_status',['not called','confirmed','rescheduled','not respond','cancelled'])->default('not called')->nullable();
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
        Schema::dropIfExists('orderfulfillment_bookings');
    }
}
