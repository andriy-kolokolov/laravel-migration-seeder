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
        $trains = config('trains');

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
