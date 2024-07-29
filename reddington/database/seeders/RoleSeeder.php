<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles if they don't already exist
        $roles = [
            'admin',
            'manager'
        ];

        foreach ($roles as $roleName) {
            $role = Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
            // Optionally, you can assign default permissions to roles here if needed
        }

        // Create permissions if they don't already exist
        $permissions = [
            'manage roles and permissions',
            'manage staff',
            'manage requests',
            'manage items',
            'manage categories',
            'manage inventory',
            'manage suppliers',
            'manage order limits',
            'generate reports',
            'view requests'
        ];

        foreach ($permissions as $permissionName) {
            $permission = Permission::firstOrCreate(['name' => $permissionName, 'guard_name' => 'web']);
            // Optionally, you can assign default roles to permissions here if needed
        }

        // Assign permissions to roles

        $admin = Role::findByName('admin','web');
        $manager = Role::findByName('manager','web');
        

        // Admin has all permissions
        $admin->syncPermissions(Permission::all());


        // Manager has specific permissions
        $manager->syncPermissions([
            'manage requests',
            'manage items',
            'manage categories',
            'manage inventory',
            'manage suppliers',
            'manage order limits',
            'generate reports',
        ]);

      
    }
}
