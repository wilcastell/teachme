<?php
use App\Entities\Ticket;
use Faker\Factory as Faker;


class TicketTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title'     => $faker->sentence(),
            'status'    => $faker->randomElement(['open', 'open', 'closed']),
            'user_id' => $this->getRandom('User')->id
        ];
    }

    public function run()
    {
       $this->createMultiple(50);

    }
}
