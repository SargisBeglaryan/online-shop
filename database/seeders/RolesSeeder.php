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
                'id' => RolesHelper::ADMIN_ID,
                'name' => RolesHelper::ADMIN,
                'description' => 'Admin role has all permissions',
            ],
            [
                'id' => RolesHelper::CUSTOMER_ID,
                'name' => RolesHelper::CUSTOMER,
                'description' => 'Customer role has permissions for online shop',
            ]
        ];

        foreach ($rolesList as $role) {
            $currentRole = Role::where('id', $role['id'])->first();

            if ($currentRole === null) {
                $currentRole = new Role();
            }
            $currentRole->id = $role['id'];
            $currentRole->name = $role['name'];
            $currentRole->description = $role['description'];
            $currentRole->saveOrFail();
        }
    }
}
