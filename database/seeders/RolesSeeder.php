<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Helpers\RolesHelper;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesList = [
            [
                'name' => RolesHelper::ADMIN;
                'description' => 'Admin role has all permissions';
            ],
            [
                'name' => RolesHelper::CUSTOMER;
                'description' => 'Customer role has permissions for online shop';
            ]
        ];
    }
}
