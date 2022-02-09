<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentUserTimeSlotAssigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_user_time_slot_assigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('time_slot_id')->index('time_slot_id')->nullable()->constrained('orderfulfillment_time_slots');
            $table->foreignId('zip_code_id')->index('zip_code_id')->nullable()->constrained('orderfulfillment_zip_codes');
            $table->foreignId('user_id')->index('user_id')->nullable()->constrained('orderfulfillment_users');
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
        Schema::dropIfExists('orderfulfillment_user_time_slot_assigns');
    }
}
