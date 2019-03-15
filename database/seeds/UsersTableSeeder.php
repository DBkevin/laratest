<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class,10)->create();
        $user=User::find(1);
        $user->name='Lee';
        $user->email='123@123.com';
        $user->save();
    }
}
