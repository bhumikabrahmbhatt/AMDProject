<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groupuser;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_user')->delete();
        DB::table('group_user')->insert([

            [
                'group_id' => '1' ,
                'user_id' => '3',
                'joined' => '1', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'group_id' => '2' ,
                'user_id' => '4',
                'joined' => '1', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'group_id' => '3' ,
                'user_id' => '5',
                'joined' => '1', 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
