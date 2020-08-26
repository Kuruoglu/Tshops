<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $organizer = Role::where('slug', 'organizer')->first();
        $createAnons = Permission::where('slug','create-anons')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $user1 = new User();
        $user1->name = 'Jhon Deo';
        $user1->email = 'jhon@deo.com';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($manageUsers);

        $user2 = new User();
        $user2->name = 'Mike Thomas';
        $user2->email = 'mike@thomas.com';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($organizer);
        $user2->permissions()->attach($createAnons);
    }
}
