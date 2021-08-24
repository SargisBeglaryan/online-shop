<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Helpers\RolesHelper;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', RolesHelper::ADMIN)->first();
        
        if ($adminRole != null) {
            $user = [
                [
                   'name'=>'Admin',
                   'username'=>'ShopAdmin',
                   'role_id'=>$adminRole->id,
                   'email'=>'admin@change.me',
                   'password'=> Hash::make('123456'),
                ],
            ];
      
            foreach ($user as $key => $value) {
                User::create($value);
            }
        }
    }
}
