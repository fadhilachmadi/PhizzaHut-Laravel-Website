<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            ['user_id' => 3, 'created_at' => Carbon::now()],
            ['user_id' => 2, 'created_at' => Carbon::now()],
            ['user_id' => 3, 'created_at' => Carbon::now()],
            ['user_id' => 2, 'created_at' => Carbon::now()],
            ['user_id' => 2, 'created_at' => Carbon::now()]
        ]);
    }
}
