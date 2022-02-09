<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentStockOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_stock_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('orderfulfillment_suppliers');
            $table->decimal('total_price',10,2)->nullable();
            $table->decimal('qty',12,2)->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->tinyInteger('is_verified')->default(0);
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
        Schema::dropIfExists('orderfulfillment_stock_orders');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
