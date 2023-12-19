<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'users',
                'display_name' => 'Usuarios',
                'permissions' => [
                    [
                        'name' => 'read-user',
                        'display_name' => 'Ver usuarios',
                    ], [
                        'name' => 'create-user',
                        'display_name' => 'Registrar usuarios',
                    ], [
                        'name' => 'update-user',
                        'display_name' => 'Modificar usuarios',
                    ], [
                        'name' => 'delete-user',
                        'display_name' => 'Remover usuarios',
                    ],
                ],
            ]
        ];

        foreach ($items as $item) {
            $module = Module::firstOrCreate([
                'name' => $item['name'],
            ], [
                'display_name' => $item['display_name'],
            ]);
            foreach ($item['permissions'] as $permission) {
                Permission::firstOrCreate([
                    'name' => $permission['name'],
                    'guard_name' => 'web',
                ], [
                    'display_name' => $permission['display_name'],
                    'module_id' => $module->id,
                ]);
            }
        }
    }
}
