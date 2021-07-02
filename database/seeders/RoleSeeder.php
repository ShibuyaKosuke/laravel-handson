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
        Role::factory(1)
            ->admin()
            ->create();

        Role::factory(1)
            ->manager()
            ->create();

        Role::factory(1)
            ->staff()
            ->create();
    }
}
