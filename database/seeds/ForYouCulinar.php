<?php

use Illuminate\Database\Seeder;

class ForYouCulinar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Menu::class, 50)->create();
    }
}
