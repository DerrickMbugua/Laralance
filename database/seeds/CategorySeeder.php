<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

      $categories = [
        ['name' => 'Android App'],
        ['name' => 'Desktop App'],
        ['name' => 'Web App'],
        ['name' => 'Graphic Design'],
        ['name' => 'Medicine'],
        ['name' => 'Architecture'],
        ['name' => 'Mathematics'],
    ];

    DB::table('categories')->insert($categories);
    }
}
