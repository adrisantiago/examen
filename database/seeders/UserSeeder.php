<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'Administrador')->first();

        $user = new User();
        $user->name = 'admin';
        $user->last_name = 'admin';
        $user->second_last_name = 'admin';
        $user->username = 'admin';
        $user->password = Hash::make('admin');
        $user->role_id = $role->id;
        $user->save();
    }
}
