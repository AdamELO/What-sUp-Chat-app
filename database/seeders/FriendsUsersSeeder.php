<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendsUsersSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 3,
            'user_id' => 2,
            'accepted' => 1
        ] );
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 7,
            'user_id' => 2,
            'accepted' => 0
        ] );
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 2,
            'user_id' => 1,
            'accepted' => 1
        ] );
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 1,
            'user_id' => 3,
            'accepted' => 0
        ] );
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 1,
            'user_id' => 4,
            'accepted' => 0
        ] );
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 1,
            'user_id' => 5,
            'accepted' => 0
        ] );
        DB::table( 'friends_users' )->insert( [
            'friend_id' => 2,
            'user_id' => 4,
            'accepted' => 0
        ] );
    }
}
