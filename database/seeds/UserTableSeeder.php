<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

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
