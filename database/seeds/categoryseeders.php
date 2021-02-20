<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['categoryName' => 'Beach'],
            ['categoryName' => 'Mountain'],
            ['categoryName' => 'Others']
       ]);
    }
}
