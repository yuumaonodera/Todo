<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TodosTableSeeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'yuuma',
            'age' => 25,
            'nationality' => 'American'
        ];
        DB::table('todos')->insert($param);
    }
}
