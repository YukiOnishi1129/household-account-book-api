<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthCategoryAmountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        DB::table('month_category_amounts')->insert([
            'category_id' => 1,
            'money' => '2000',
            'date' => $date->format('Y-m-d'),
            'user_id' => 1
        ]);
    }
}
