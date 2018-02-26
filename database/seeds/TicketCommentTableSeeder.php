<?php

use Illuminate\Database\Seeder;

class TicketCommentTableSeeder extends BaseSeeder
{
    protected $total = 250;
    
    public function getModel()
    {
        return new \App\Entities\TicketComment();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return[
            'user_id'   => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'comment'   => $faker->paragraph(),
            'link'      => $faker->randomElement(['','',$faker->url])
        ];
    }
}

