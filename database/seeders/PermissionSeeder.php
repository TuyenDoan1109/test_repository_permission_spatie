<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([

            // Nhóm quyền với Admin
            [
                'name' => 'View Admin',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Add Admin',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Edit Admin',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Delete Admin',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Nhóm quyền với Category
            [
                'name' => 'View Category',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Add Category',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Edit Category',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Delete Category',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Nhóm quyền với Subcategory
            [
                'name' => 'View Subcategory',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Add Subcategory',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Edit Subcategory',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Delete Subcategory',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
