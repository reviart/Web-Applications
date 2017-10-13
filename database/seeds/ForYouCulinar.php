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
        //factory(App\Admin::class, 5)->create();
        factory(App\User::class, 10)->create();
        //factory(App\Curtner::class, 10)->create();
    }
}
