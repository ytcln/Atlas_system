<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {DB::table('users')->insert([
            ['over_name' => '山田',
            'under_name' => '太郎',
            'over_name_kana' => 'ヤマダ',
            'under_name_kana' => 'タロウ',
            'mail_address' => 'abc@de',
            'sex' => '1',
            'birth_day' => '1998-1-1',
            'role' => '1',
            'password' => bcrypt(12345),],

        ]);
    }
}
