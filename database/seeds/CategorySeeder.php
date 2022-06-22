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
        $categories = ['Quarto', 'Sala', 'Cozinha', 'Casa de banho'];

        foreach ($categories as $category) {
            \DB::table('categories')->insert(['name' => $category, 'created_at' => now(), 'updated_at' => now()]);
        }
    }
}
