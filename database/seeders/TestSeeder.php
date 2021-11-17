<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('tests')->truncate();
        DB::table('tests')->insert([
            [
                'name' => "HN",
                'price' => 2,
                'avatar' => 'asdasd',
            ],
            [
                'name' => "Vinhomes",
                'price' => 3,
                'avatar' => 'qweqw',
            ],
            [
                'name' => "Neverland",
                'price' => 4,
                'avatar' => 'zxc',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
