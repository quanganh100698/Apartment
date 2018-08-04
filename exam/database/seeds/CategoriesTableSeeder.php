<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Cay Giay',
            ],
            [
                'id'=>2,
                'name'=>'Hai Ba Trung',
            ],
            [
                'id'=>3,
                'name'=>'Hoan Kiem',
            ],
            [
                'id'=>4,
                'name'=>'Dong Da',
            ],
            [
                'id'=>5,
                'name'=>'Tay Ho',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
