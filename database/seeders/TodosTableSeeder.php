<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\seeders\DB;


class TodosTableSeeder extends Seeder
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
