<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        
            'name' => 'kanako',
            'mail' => 'kanako@momoclo.jp',
            'age' => 24,
        ];

        DB::table('people')->insert($param);
     
        $param=[
            'name'=>'ayaka',
            'mail'=>'ayaka@momoclo.jp',
            'age'=>24,
        ];

        DB::table('people')->insert($param);

        $param=[
            'name'=>'reni',
            'mail'=>'reni@momoclo.jp',
            'age'=>28,
        ];
        DB::table('people')->insert($param);
    }
}
