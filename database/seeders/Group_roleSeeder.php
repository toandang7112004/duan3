<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Group_roleSeeder extends Seeder
{
    protected $table = 'group_role';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 33; $i++) {
            DB::table('group_role')->insert([
                'group_id' => 1,
                'role_id' => $i,
            ]);
        }
    }
}
