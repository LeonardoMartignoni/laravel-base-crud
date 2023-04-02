<?php

namespace Database\Seeders;

use App\Models\Songs;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
     for ($i = 0;$i < 20;$i++) {
        $new_song = new Songs;

        $new_song->title = $faker->word();
        $new_song->album = $faker->word();
        $new_song->author = $faker->word();
        $new_song->editor = $faker->word();
        $new_song->length = $faker->randomFloat(2, 1, 4);
        $new_song->poster = 'https://picsum.photos/id/237/400/250';

        $new_song->save();
     }   
    }
}
