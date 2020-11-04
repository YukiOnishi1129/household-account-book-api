<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        DB::table('amounts')->insert([
            'category_id' => 1,
            'money' => '1000',
            'date' => $date->format('Y-m-d'),
            'user_id' => 1
        ]);
        DB::table('amounts')->insert([
            'category_id' => 2,
            'money' => '1000',
            'date' => $date->format('Y-m-d'),
            'user_id' => 1
        ]);
    }
}
