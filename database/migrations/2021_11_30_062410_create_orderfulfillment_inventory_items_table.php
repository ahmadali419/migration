<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_inventory_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('orderfulfillment_departments');
            $table->foreignId('item_id')->constrained('orderfulfillment_items');
            $table->foreignId('variant_id')->constrained('orderfulfillment_variants');
            $table->decimal('qty',12,2)->nullable();
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
        Schema::dropIfExists('orderfulfillment_inventory_items');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
