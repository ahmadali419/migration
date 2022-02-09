<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OrderFulfillmentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryData = [
            ['id' => '1', 'name' => 'Category', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '2', 'name' => 'Permission', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '3', 'name' => 'Role', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '4', 'name' => 'User', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '5', 'name' => 'Zip', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '6', 'name' => 'Department', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '7', 'name' => 'Item', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '8', 'name' => 'Variant', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '9', 'name' => 'Supplier', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '10', 'name' => 'Stock', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '11', 'name' => 'StockPurchase', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '12', 'name' => 'TimeSlot', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => '13', 'name' => 'Booking', 'type' => 'permission', 'added_by' => 1, 'updated_by' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],



        ];

        DB::table('orderfulfillment_categories')->insert($categoryData);
    }
}
