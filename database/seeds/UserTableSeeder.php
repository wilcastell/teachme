<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
        $this->createUsers(50);
    }

    public function createAdmin()
    {
        User::create([
            'name'  => 'Duilio Palacios',
            'email' => 'admin@styde.net',
            'password' => bcrypt('admin')
        ]);
    }

    public function createUsers($total)
    {
        $faker = Faker::create();

        for ($i=1; $i < $total; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
