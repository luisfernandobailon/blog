<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        App\User::create([
        	'name' => 'Fernando Bailon',
        	'email' => 'luisfernandobailon@gmail.com',
        	'password' => bcrypt('123456')
        ]);

    }
}
