<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->index('department_id')->constrained('orderfulfillment_departments');
            $table->string('name', 250);
            $table->string('min_qty', 20);
            $table->string('unit', 20);
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
        Schema::dropIfExists('orderfulfillment_items');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
