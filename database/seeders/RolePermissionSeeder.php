<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    // Daftar permission aplikasi dengan struktur [resource => [actions]] untuk kontrol akses.
    private $permissions = [
        'dashboard' => [
            'view'
        ],

        'user' => [
            'view',
            'create',
            'edit',
            'delete'
        ],

        'resident' => [
            'view',
            'create',
            'edit',
            'delete'
        ],

        'report-category' => [
            'view',
            'create',
            'edit',
            'delete'
        ],

        'report' => [
            'view',
            'create',
            'edit',
            'delete'
        ],

        'report-status' => [
            'view',
            'create',
            'edit',
            'delete'
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat permission berdasarkan daftar yang telah didefinisikan.
        foreach ($this->permissions as $permissionGroup => $actions) {
            foreach ($actions as $action) {
                Permission::firstOrCreate([
                    // 'name' => $permissionGroup . '-' . $action,
                    'name' => "{$permissionGroup}-{$action}"
                ]);
            }
        }

        Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web'
        ])->givePermissionTo(Permission::all());

        Role::firstOrCreate([
            'name' => 'resident',
            'guard_name' => 'web'
        ])->givePermissionTo([
            'report-category-view',

            'report-view',
            'report-create',
            'report-edit',
            'report-delete',

            'report-status-view',
        ]);
    }
}
