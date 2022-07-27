<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Simple Ceremony',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@123')
            ],
            [
              
                'name' => 'Partner Ceremony',
                'email' => 'partner@gmail.com',
                'password' => bcrypt('partner@123'),
            ]
    
        );
        $role = Role::create(['name' => 'Admin']);
        
        

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
