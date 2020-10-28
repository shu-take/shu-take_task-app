<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [[
            'title' => 'テスト',
            'body' => 'テスト'
        ],
        [
            'title' => 'test',
            'body' => 'test'
        ]];
        DB::table('tasks')->insert($param);
    }
}
