<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Bryan",
            "email"=>"bryanemail@mail.com",
            "password"=>"bryan",
            "created_at"=>now()

        ]);

        DB::table('users')->insert([
            "name"=>"Nadjib",
            "email"=>"nadjib@mail.com",
            "password"=>"nadjib",
            "created_at"=>now()

        ]);
    }
}
