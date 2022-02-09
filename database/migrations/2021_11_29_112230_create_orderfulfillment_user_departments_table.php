<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentUserDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_user_departments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index('user_id')->constrained('orderfulfillment_users');
            $table->foreignId('department_id')->index('department_id')->constrained('orderfulfillment_departments');
            $table->unsignedInteger('added_by')->nullable()->index();
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
        Schema::dropIfExists('orderfulfillment_user_departments');
    }
}
