<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->slug = 'admin';
        $admin->save();

        $organizer = new Role();
        $organizer->name = 'organizer';
        $organizer->slug = 'organizer';
        $organizer->save();
    }
}
