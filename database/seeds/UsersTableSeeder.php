<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'              => 1,
                'name'            => 'Admin',
                'email'           => 'admin@admin.com',
                'password'        => bcrypt('password'),
                'remember_token'  => null,
                'two_factor_code' => '',
                'ms_user'         => '',
                'first_name'      => '',
                'last_name'       => '',
                'address'         => '',
                'user_color'      => '',
                'goog_pw'         => '',
                'mobile'          => '',
                'ticketit_agent'  => '',
            ],
        ];

        User::insert($users);
    }
}
