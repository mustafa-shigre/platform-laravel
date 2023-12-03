<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminRoleSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'مشرف']);
        $adminRole->givePermissionTo(['إضافة تدريب']);
    }
}
