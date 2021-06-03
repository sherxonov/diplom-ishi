<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Админ',

            'email' => 'admin@admin.com',

            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        ]);

        $user->assignRole('admin');
    }
}
