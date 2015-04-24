<?php

use Illuminate\Database\Seeder;

use Bakesale\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'email' => 'sysadmin@admin.com',
            'username' => 'sysadmin',
            'password' => 'sysadmin',
            'first_name' => 'System',
            'last_name' => 'Administrator'
        ]);

        User::create([
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => 'admin',
            'first_name' => 'Administrator',
            'last_name' => 'User'
        ]);

        User::create([
            'email' => 'user@user.com',
            'username' => 'user',
            'password' => 'user',
            'first_name' => 'Generic',
            'last_name' => 'User'
        ]);

        User::create([
            'email' => 'customer@user.com',
            'username' => 'customer',
            'password' => 'customer',
            'first_name' => 'Customer',
            'last_name' => 'Client'
        ]);

        User::create([
            'email' => 'supplier@user.com',
            'username' => 'supplier',
            'password' => 'supplier',
            'first_name' => 'Supplier',
            'last_name' => 'Manufacturer'
        ]);
    }

}