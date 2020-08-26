<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUser = new Permission();
        $manageUser->name = 'Manage users';
        $manageUser->slug = 'manage-users';
        $manageUser->save();

        $createAnons = new Permission();
        $createAnons->name = 'Create Anons';
        $createAnons->slug = 'create-anons';
        $createAnons->save();
    }
}
