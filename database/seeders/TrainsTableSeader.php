<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Amtrak',
                'departure_station' => 'New York Penn Station',
                'arrival_station' => 'Washington Union Station',
                'departure_time' => '08:00:00',
                'arrival_time' => '11:30:00',
                'train_code' => 'A123',
                'coach_count' => 6,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Eurostar',
                'departure_station' => 'London St Pancras International',
                'arrival_station' => 'Paris Gare du Nord',
                'departure_time' => '09:30:00',
                'arrival_time' => '12:15:00',
                'train_code' => 'E456',
                'coach_count' => 8,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Shinkansen',
                'departure_station' => 'Tokyo Station',
                'arrival_station' => 'Osaka Station',
                'departure_time' => '10:00:00',
                'arrival_time' => '13:30:00',
                'train_code' => 'S789',
                'coach_count' => 10,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Indian Railways',
                'departure_station' => 'Mumbai Central',
                'arrival_station' => 'Chennai Central',
                'departure_time' => '11:15:00',
                'arrival_time' => '19:45:00',
                'train_code' => 'I987',
                'coach_count' => 12,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'SNCF',
                'departure_station' => 'Paris Gare de Lyon',
                'arrival_station' => 'Marseille Saint-Charles',
                'departure_time' => '13:00:00',
                'arrival_time' => '16:30:00',
                'train_code' => 'S246',
                'coach_count' => 6,
                'on_time' => false,
                'canceled' => true,
            ],
            [
                'company' => 'Deutsche Bahn',
                'departure_station' => 'Berlin Hauptbahnhof',
                'arrival_station' => 'Hamburg Hauptbahnhof',
                'departure_time' => '14:45:00',
                'arrival_time' => '17:30:00',
                'train_code' => 'D543',
                'coach_count' => 5,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Renfe',
                'departure_station' => 'Madrid Puerta de Atocha',
                'arrival_station' => 'Barcelona Sants',
                'departure_time' => '16:30:00',
                'arrival_time' => '20:00:00',
                'train_code' => 'R321',
                'coach_count' => 7,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'China Railway',
                'departure_station' => 'Beijing South Station',
                'arrival_station' => 'Shanghai Hongqiao Station',
                'departure_time' => '17:45:00',
                'arrival_time' => '21:15:00',
                'train_code' => 'C654',
                'coach_count' => 10,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '18:30:00',
                'arrival_time' => '20:15:00',
                'train_code' => 'T987',
                'coach_count' => 4,
                'on_time' => true,
                'canceled' => false,
            ],
        ];

        foreach ($trains as $train) {
            // OPTION 1
            //            $objTrain = new Train();
            //            $objTrain->company = $train['company'];
            //            $objTrain->departure_station = $train['departure_station'];
            //            $objTrain->arrival_station = $train['arrival_station'];
            //            $objTrain->departure_time = $train['departure_time'];
            //            $objTrain->arrival_time = $train['arrival_time'];
            //            $objTrain->train_code = $train['train_code'];
            //            $objTrain->coach_count = $train['coach_count'];
            //            $objTrain->on_time = $train['on_time'];
            //            $objTrain->canceled = $train['canceled'];
            //            $objTrain->save();

            // OPTION 2 (if associative array!)
            Train::create($train);
        }

    }
}
