<?php

namespace Database\Seeders;

use App\Models\OrderFulfillmentUser;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class OrderFulfillmentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userArr = [
            'role_id' => 1,
            'name' => 'Developer',
            'u_name' => 'developer',
            'email' => 'developer@test.com',
            'phone_number' => '03216252600',
            'password' => Hash::make("developer123"),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'type' => 'developer',
            'is_active' => 1,
            'added_by' => 1,
            'updated_by' => 1
        ];
        OrderFulfillmentUser::create($userArr);

        $userArr = [
            'role_id' => 2,
            'name' => 'Super Admin',
            'u_name' => 'superadmin',
            'email' => 'super_admin@test.com',
            'phone_number' => '03336252600',
            'password' => Hash::make("admin123"),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'type' => 'super_admin',
            'is_active' => 1,
            'added_by' => 1,
            'updated_by' => 1
        ];
        OrderFulfillmentUser::create($userArr);

    }
}
