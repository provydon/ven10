<?php

namespace Database\Seeders;

use App\Models\CarOwner;
use App\Services\Google\GoogleSheets;
use Illuminate\Database\Seeder;

class CarOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            // Get Car Owners from Google Sheets
          $values = GoogleSheets::getSheet("2:65500","1F3yFsy7kxDR5KwTkYaI84NmfhpmrQqrKBZd3J8fmiw8");
        } catch (\Throwable $th) {
            throw $th;
        }

        foreach ($values as $key => $row) {
           $car_owner = new CarOwner();
           $car_owner->first_name = $row[1];
           $car_owner->last_name = $row[2];
           $car_owner->email = $row[3];
           $car_owner->country = $row[4];
           $car_owner->car_model = $row[5];
           $car_owner->car_model_year = $row[6];
           $car_owner->car_color = $row[7];
           $car_owner->gender = $row[8];
           $car_owner->job_title = $row[9];
           $car_owner->bio = $row[10];
           $car_owner->save();
        }
    }
}
