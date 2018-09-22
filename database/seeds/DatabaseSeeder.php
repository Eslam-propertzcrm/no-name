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
        DB::table('vegetables')->insert([
            'product' => 'كوسه',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);

        DB::table('vegetables')->insert([
            'product' => 'جزر',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);

        DB::table('vegetables')->insert([
            'product' => 'بطاطس',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);

        DB::table('vegetables')->insert([
            'product' => 'بصل',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);
        DB::table('vegetables')->insert([
            'product' => 'ثوم',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);
        DB::table('vegetables')->insert([
            'product' => 'ليمون',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);
        DB::table('vegetables')->insert([
            'product' => 'فلفل',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);
        DB::table('vegetables')->insert([
            'product' => 'باذنجان',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);
        DB::table('vegetables')->insert([
            'product' => 'خيار',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);
        DB::table('vegetables')->insert([
            'product' => 'طماطم',
            'egypt' => '10',
            'Jordan' => '20',
            'Saudi' => '22',
        ]);


    }
}
