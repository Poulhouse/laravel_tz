<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $newsList = [];

	    for ($i = 1; $i <= 20; $i++ ) {
		    $newsList[] = [
		        'title' => 'Заголовок новости #'.$i,
		        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda commodi consequuntur eligendi facere facilis fugit, ipsam laboriosam, maiores natus neque obcaecati pariatur porro possimus quia quos reiciendis repellat reprehenderit saepe temporibus. Aspernatur ea maiores vel! Aspernatur atque doloremque ducimus eius minus nostrum quidem quis ullam vel veritatis. Ex, fugit.',
            ];
	    }

	    \DB::table('news')->insert($newsList);
    }
}
