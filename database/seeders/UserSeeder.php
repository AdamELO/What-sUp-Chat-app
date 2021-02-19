<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'users' )->insert( [
            'name' => 'Adam',
            'email' => 'adam@adam.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
        DB::table( 'users' )->insert( [
            'name' => 'Alex',
            'email' => 'alex@alex.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
        DB::table( 'users' )->insert( [
            'name' => 'Lisa',
            'email' => 'lisa@lisa.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
        DB::table( 'users' )->insert( [
            'name' => 'Pierre',
            'email' => 'pierre@pierre.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
        DB::table( 'users' )->insert( [
            'name' => 'Paul',
            'email' => 'paul@paul.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
        DB::table( 'users' )->insert( [
            'name' => 'Jacques',
            'email' => 'jacques@jacques.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
        DB::table( 'users' )->insert( [
            'name' => 'Aurore',
            'email' => 'aurore@aurore.com',
            'password' => bcrypt( 'password123' ),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ] );
    }
}
