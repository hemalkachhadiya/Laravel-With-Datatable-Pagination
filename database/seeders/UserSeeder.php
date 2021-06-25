<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        User::insert( array(
            [
                'name' => 'Smart Ravi',
                'email' => 'ravi@gmail.com',
                'phone' => '9558687474',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Pankaj',
                'email' => 'pankaj@gmail.com',
                'phone' => '9558685874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Bhavik',
                'email' => 'bhavik@gmail.com',
                'phone' => '9559688874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Dhaval',
                'email' => 'dhaval@gmail.com',
                'phone' => '9558568874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Bhagirath',
                'email' => 'bhagirath@gmail.com',
                'phone' => '9572568874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Keyur',
                'email' => 'keyur@gmail.com',
                'phone' => '9558568874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Tirth',
                'email' => 'tirth@gmail.com',
                'phone' => '7458568874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ) );
    }
}
