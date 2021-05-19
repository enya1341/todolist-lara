<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'list' => '1',
        ];
        DB::table('todolists')->insert($param);

        $param = [
            'list' => '2',
        ];
        DB::table('todolists')->insert($param);
    }
}
