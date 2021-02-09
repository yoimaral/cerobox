<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Yoimar Lozano';
        $user->email = 'yoimar@gmail.com';
        $user->is_admin = true;
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->save();

        factory(App\User::class, 50)->create();
    }
}
