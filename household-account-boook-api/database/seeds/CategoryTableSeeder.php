<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryNames = array(
            '0' => '食費',
            '1' => '交際費',
            '2' => '家賃',
            '3' => '生活費',
            '4' => '雑費',
            '5' => '光熱費',
            '6' => 'プログラマー',
            '7' => '通勤費'
        );
        for ($i = 0; $i < count($categoryNames); $i++) {
            DB::table('categories')->insert([
                'category_name' => $categoryNames[$i],
                'color_type' => $i + 1,
                'user_id' => 1
            ]);
        }
    }
}
