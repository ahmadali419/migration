<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('company_name', 250);
            $table->string('phone', 20);
            $table->string('company_phone', 20);
            $table->string('address', 250);
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
        Schema::dropIfExists('orderfulfillment_suppliers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
