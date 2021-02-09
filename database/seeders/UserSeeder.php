<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name = 'Yoimar Lozano';
        //$user->document = '0123456789';
        //$user->phone = '1123456789';
        //$user->observation = 'Administrador';
        $user->email = 'yoimar@gmail.com';
        $user->is_admin = true;
        $user->email_verified_at = now();
        $user->password = bcrypt('password');
        $user->save();
    }
}
