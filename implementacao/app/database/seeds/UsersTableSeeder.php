<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Livio Consult',
            'email' => 'liviorodrigueslopes@gmail.com',
            'avatar' => 'https://cdn1.iconfinder.com/data/icons/man-user-human-profile-avatar-business-person/100/09-1User_3-4-512.png',
            'password' => Hash::make('123456789'),
            'super_admin' => true
        ];

        $user = \App\User::create($user);

    }
}
