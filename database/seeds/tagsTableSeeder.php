<?php

use Illuminate\Database\Seeder;
use App\Tag;
class tagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=app(Faker\Generator::class);
        $tags=factory(Tag::class)->times(5)->make();
        Tag::insert($tags->toArray());
    }
}
