<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoryTableSeeder::class,
            AmountTableSeeder::class,
            DateAmountTableSeeder::class,
            MonthAmountTableSeeder::class,
            MonthCategoryAmountTableSeeder::class
        ]);
        // $this->call(UserSeeder::class);
    }
}
