<?php
use Faker\Generator;
use App\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
       return [
            'name' => $faker->name,
            'email'=> $faker->email,
            'password' => bcrypt('secret')
       ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    public function createAdmin()
    {
        User::create([
            'name'  => 'Duilio Palacios',
            'email' => 'admin@styde.net',
            'password' => bcrypt('admin')
        ]);
    }

    
}
