<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentSaleLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_sale_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->index('order_id')->nullable()->constrained('orders');
            $table->foreignId('product_id')->index('product_id')->nullable();
            $table->foreignId('department_id')->index('department_id')->nullable();
            $table->foreignId('item_id')->index('item_id')->nullable();
            $table->foreignId('variant_id')->index('variant_id')->nullable();
            $table->decimal('qty',10,2)->nullable();
            $table->enum('status',['pending', 'in progress', 'not respond', 'completed'])->default('pending')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->tinyInteger('is_verified')->default('0');
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
        Schema::dropIfExists('orderfulfillment_sale_logs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
