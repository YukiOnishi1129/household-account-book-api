<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateAmountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        DB::table('date_amounts')->insert([
            'money' => '2000',
            'date' => $date->format('Y-m-d'),
            'user_id' => 1
        ]);
    }
}
