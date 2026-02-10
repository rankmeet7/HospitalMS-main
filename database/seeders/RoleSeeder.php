<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name"=>"admin"
        ]);
        
        Role::create([
            "name"=>"accountant"
        ]);

        Role::create([
            "name"=>"store man"
        ]);

        Role::create([
            "name"=>"doctor"
        ]);

        Role::create([
            "name"=>"PA"
        ]);
    }
}
