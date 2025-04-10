<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $superAdmin = Role::create(['name' => 'superadmin']);
        $admin = Role::create(['name' => 'admin']);

        $permissions = [
            'manage users',
            'manage roles',
            'manage products',
            'manage orders',
            'manage gallery',
            'manage waivers',
            'manage penalties',
            'manage withdrawals',
            'manage transactions',
            'manage subscriptions',
            'manage-settings',
            'manage-home',
            'manage-payment',
            'subscription-withdraw',
        
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $superAdmin->givePermissionTo(Permission::all());
        $admin->givePermissionTo('manage roles');
    }
}
