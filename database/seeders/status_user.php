<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class status_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_user')->insert([
            ['id' => 1, 'namestatus' => 'admin'],
            ['id' => 2, 'namestatus' => 'user'],
            ['id' => 3, 'namestatus' => 'kurir'],
            // tambahkan data lainnya jika diperlukan
        ]);
    }
}
