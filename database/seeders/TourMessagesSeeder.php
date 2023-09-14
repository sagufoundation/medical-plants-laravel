<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourMessages;

class TourMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TourMessages::create([
            'name' => 'Message 1',
            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         ]);
        
        TourMessages::create([
            'name' => 'Message 2',
            'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
         ]);
        
         TourMessages::create([
             'name' => 'Message 3',
             'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
          ]);

    }
}
