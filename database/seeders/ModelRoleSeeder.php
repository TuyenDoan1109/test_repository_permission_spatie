<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_roles')->insert([

            // Role Super Admin
            [
                'role_id' => '1',
                'model_type' => 'App\Models\Admin',
                'model_id' => '1',
            ],
            [
                'role_id' => '1',
                'model_type' => 'App\Models\Admin',
                'model_id' => '2',
            ],

            // Role Giám đốc
            [
                'role_id' => '2',
                'model_type' => 'App\Models\Admin',
                'model_id' => '3',
            ],

            // Role Quản lý 1
            [
                'role_id' => '3',
                'model_type' => 'App\Models\Admin',
                'model_id' => '4',
            ],

            // Role Quản lý 2
            [
                'role_id' => '4',
                'model_type' => 'App\Models\Admin',
                'model_id' => '5',
            ],

            // Role Quản lý 3
            [
                'role_id' => '5',
                'model_type' => 'App\Models\Admin',
                'model_id' => '6',
            ],

            // Role Nhân viên 1
            [
                'role_id' => '6',
                'model_type' => 'App\Models\Admin',
                'model_id' => '7',
            ],

            // Role Nhân viên 2
            [
                'role_id' => '7',
                'model_type' => 'App\Models\Admin',
                'model_id' => '8',
            ],

            // Role Nhân viên 3
            [
                'role_id' => '8',
                'model_type' => 'App\Models\Admin',
                'model_id' => '9',
            ],
        ]);
    }
}
