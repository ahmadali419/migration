<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderFulfillmentPermission;
use Carbon\Carbon;
use DB;

class OrderFulfillmentRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleData = [
            'id' => 1,
            'name' => 'Developer',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        OrderFulfillmentPermission::assignPermission($id);
        $roleData = [
            'id' => 2,
            'name' => 'Super Admin',
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $id = DB::table('orderfulfillment_roles')->insertGetId($roleData);
        OrderFulfillmentPermission::assignPermission($id);
    }
}
