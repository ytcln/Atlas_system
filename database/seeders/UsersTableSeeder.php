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
            'mail_address' => 'abc@de4',
            'sex' => '1',
            'birth_day' => '1998-1-1',
            'role' => '1',
            'password' => bcrypt(12345),],

            ['over_name' => '佐藤',
            'under_name' => '二郎',
            'over_name_kana' => 'サトウ',
            'under_name_kana' => 'ジロウ',
            'mail_address' => 'abcde@ff',
            'sex' => '1',
            'birth_day' => '1985-2-2',
            'role' => '2',
            'password' => bcrypt(123456),],

            ['over_name' => '鈴木',
            'under_name' => '花',
            'over_name_kana' => 'スズキ',
            'under_name_kana' => 'ハナ',
            'mail_address' => 'ab@def',
            'sex' => '2',
            'birth_day' => '1985-3-3',
            'role' => '3',
            'password' => bcrypt(1234567),],

            ['over_name' => '高橋',
            'under_name' => '凛',
            'over_name_kana' => 'タカハシ',
            'under_name_kana' => 'リン',
            'mail_address' => 'abcde@f',
            'sex' => '2',
            'birth_day' => '2000-4-4',
            'role' => '4',
            'password' => bcrypt(12345678),],

            ['over_name' => '渡辺',
            'under_name' => '健',
            'over_name_kana' => 'ワタナベ',
            'under_name_kana' => 'ケン',
            'mail_address' => '12345@ab',
            'sex' => '1',
            'birth_day' => '2001-6-6',
            'role' => '4',
            'password' => bcrypt(123123123),],

            ['over_name' => '太田',
            'under_name' => '智',
            'over_name_kana' => 'オオタ',
            'under_name_kana' => 'サトシ',
            'mail_address' => '123456@123',
            'sex' => '3',
            'birth_day' => '2005-3-3',
            'role' => '4',
            'password' => bcrypt(abcdefgh),],

            ['over_name' => '前田',
            'under_name' => '和人',
            'over_name_kana' => 'マエダ',
            'under_name_kana' => 'カズト',
            'mail_address' => '123123@12',
            'sex' => '1',
            'birth_day' => '2008-7-6',
            'role' => '4',
            'password' => bcrypt(abcde123),],
        ]);
    }
}
