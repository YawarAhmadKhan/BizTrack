<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =  User::updateOrCreate([
            "name"=>"Superadmin",
            "email"=>"superadmin@biztrack.com"
        ],
        [
             "name"=>"Superadmin",
            "email"=>"superadmin@biztrack.com",
            "password" => Hash::make("12345678"),
        ]
    );
        $role = Role::where('name', 'Superadmin')->first();
        if ($role && !$user->hasRole('Superadmin')) {
            $user->assignRole($role);
        }}
}
