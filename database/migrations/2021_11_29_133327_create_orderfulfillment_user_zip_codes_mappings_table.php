<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentUserZipCodesMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_user_zip_codes_mappings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index('user_id')->constrained('orderfulfillment_users');
            $table->foreignId('zip_id')->index('zip_id')->constrained('orderfulfillment_zip_codes');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('orderfulfillment_user_zip_codes_mappings');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
