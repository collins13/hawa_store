<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = new Role();
        $user_role->name = 'user';
        $user_role->description ='normal user';
        $user_role->save();

        $author_role = new Role();
        $author_role->name = 'Author';
        $author_role->description ='this is a author';
        $author_role->save();

        $admin_role = new Role();
        $admin_role->name = 'admin';
        $admin_role->description ='its an admin';
        $admin_role->save();
    }
}
