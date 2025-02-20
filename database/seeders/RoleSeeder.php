<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = collect(['Superadmin','Client','User']);
    $roles->each(function ($roles){
        Role::firstOrCreate(['name' => $roles]);
    });
    }
}
