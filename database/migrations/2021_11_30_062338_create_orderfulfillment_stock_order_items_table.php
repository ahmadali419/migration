<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentStockOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_stock_order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_order_id')->constrained('orderfulfillment_stock_orders');
            $table->foreignId('department_id')->constrained('orderfulfillment_departments');
            $table->foreignId('item_id')->constrained('orderfulfillment_items');
            $table->foreignId('variant_id')->constrained('orderfulfillment_variants');
            $table->decimal('per_unit_price',10,2)->nullable();
            $table->decimal('qty',12,2)->nullable();
            $table->decimal('total_price',12,2)->nullable();
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
        Schema::dropIfExists('orderfulfillment_stock_order_items');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
