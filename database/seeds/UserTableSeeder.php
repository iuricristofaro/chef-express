<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory('App\User')->create(
            [
                'name' => 'Iuri Cristofaro',
                'email' => 'iuri@iuricristofaro.com.br',
                'role' => 'admin',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );

        factory(App\User::class, 9)->create();
    }
}
