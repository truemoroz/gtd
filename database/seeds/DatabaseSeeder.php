<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('folders')->insert([
            ['name' => 'inbox'],
            ['name' => 'today'],
            ['name' => 'next'],
            ['name' => 'tomorrow'],
            ['name' => 'scheduled'],
            ['name' => 'someday'],
            ['name' => 'waiting'],
        ]);
        $users = factory(App\Task::class, 10)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
