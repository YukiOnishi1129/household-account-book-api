<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthAmountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        DB::table('month_amounts')->insert([
            'money' => '2000',
            'date' => $date->format('Y-m-d'),
            'user_id' => 1
        ]);
    }
}
