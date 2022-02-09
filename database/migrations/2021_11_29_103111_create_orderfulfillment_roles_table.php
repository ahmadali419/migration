<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_roles', function (Blueprint $table) {
            $table->id(); $table->string('name');
            $table->bigInteger('added_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('orderfulfillment_role_has_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission_id')->constrained('orderfulfillment_permissions')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('orderfulfillment_roles')->onDelete('cascade');
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
        Schema::dropIfExists('orderfulfillment_role_has_permissions');
        Schema::dropIfExists('orderfulfillment_roles');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
