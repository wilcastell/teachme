<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        //para poder eliminar con constrains
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        //volver habilitar constrains
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
