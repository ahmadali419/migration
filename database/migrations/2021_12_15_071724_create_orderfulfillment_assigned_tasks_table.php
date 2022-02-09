<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentAssignedTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_assigned_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->index('task_id')->nullable()->constrained('orderfulfillment_sale_logs');
            $table->foreignId('user_id')->index('user_id')->nullable()->constrained('orderfulfillment_users');
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
        Schema::dropIfExists('orderfulfillment_assigned_tasks');
    }
}
