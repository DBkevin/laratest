<?php

use Illuminate\Database\Seeder;
use App\User;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=User::all()->pluck('id')->toArray();
        $userPros = factory(\App\UserProfile::class)->times(10)->make()->each(function ($user, $index) use ($users) {
            $user->user_id = $users[$index];
        });
        App\UserProfile::insert($userPros->toArray());
    }
}
