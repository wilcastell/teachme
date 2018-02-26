<?php

use Illuminate\Database\Seeder;

class TicketVoteSeeder extends BaseSeeder
{
    protected $total = 250;
    
    public function getModel()
    {
        return new \App\Entities\TicketVote;
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return[
            'user_id' => $this->getRandom('User')->id,
            'ticket_id'=> $this->getRandom('Ticket')->id
        ];
    }
}
