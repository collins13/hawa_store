<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              $user_role = Role::where('name', 'user')->first();
              $author_role = Role::where('name', 'author')->first();
              $admin_role = Role::where('name', 'admin')->first();

              $user = new User();
              $user->name = 'Visitor';
              $user->email = 'rashid@example.com';
              $user->password = bcrypt('visitor');
              $user->save();
              $user->roles()->attach($user_role);

              $admin = new User();
              $admin->name = 'Admin';
              $admin->email = 'admin@example.com';
              $admin->password = bcrypt('admin');
              $admin->save();
              $admin->roles()->attach($admin_role);


              $author = new User();

              $author->name = 'Author';
              $author->email = 'author@example.com';
              $author->password = bcrypt('author');
              $author->save();
              $author->roles()->attach($author_role);
    }
}
