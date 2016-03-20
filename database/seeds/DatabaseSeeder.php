<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        factory('App\User')->create(
            [
                'name' => 'Iuri Cristofaro',
                'email' => 'iuri@iuricristofaro.com.br',
                'role' => 'admin',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );

        $this->call(PostsTableSeeder::class);

        $this->call(UserTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
