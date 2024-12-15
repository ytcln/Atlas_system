<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subject_users')->insert([
            ['subject_id' => '国語'],
            ['subject_id' => '数学'],
            ['subject_id' => '英語'],

        ]);
    }
}
