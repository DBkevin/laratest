<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //faker 实例
        $faker=app(Faker\Generator::class);
        //获取用户ID
        $users=User::all()->pluck("id")->toArray();
        $posts=factory(Post::class)->times(100)->make()->each(function($post,$index) use ($users,$faker){
            $post->user_id=$faker->randomElement($users);
        });
        Post::insert($posts->toArray());
    }
}
