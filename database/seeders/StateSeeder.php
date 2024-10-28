<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            [ "name" => "Andaman and Nicobar Islands" ],
            [ "name" => "Andhra Pradesh" ],
            [ "name" => "Arunachal Pradesh" ],
            [ "name" => "Assam" ],
            [ "name" => "Bihar" ],
            [ "name" => "Chandigarh" ],
            [ "name" => "Chhattisgarh" ],
            [ "name" => "Dadra Nagar Haveli & Daman-Diu" ],
            [ "name" => "Delhi" ],
            [ "name" => "Goa" ],
            [ "name" => "Gujarat" ],
            [ "name" => "Haryana" ],
            [ "name" => "Himachal Pradesh" ],
            [ "name" => "Jammu and Kashmir" ],
            [ "name" => "Jharkhand" ],
            [ "name" => "Karnataka" ],
            [ "name" => "Kerala" ],
            [ "name" => "Ladakh" ],
            [ "name" => "Lakshadweep" ],
            [ "name" => "Madhya Pradesh" ],
            [ "name" => "Maharashtra" ],
            [ "name" => "Manipur" ],
            [ "name" => "Meghalaya" ],
            [ "name" => "Mizoram" ],
            [ "name" => "Nagaland" ],
            [ "name" => "Odisha" ],
            [ "name" => "Puducherry" ],
            [ "name" => "Punjab" ],
            [ "name" => "Rajasthan" ],
            [ "name" => "Sikkim" ],
            [ "name" => "Tamil Nadu" ],
            [ "name" => "Telangana" ],
            [ "name" => "Tripura" ],
            [ "name" => "Uttarakhand" ],
            [ "name" => "Uttar Pradesh" ],
            [ "name" => "West Bengal" ],
        ];

        foreach ($states as $state) {
            $exist = State::where('name', $state['name'])->first();

            if (!$exist) {
                $newState = new State();
                $newState->name = $state['name'];
                $newState->save();
            }
        }
    }
}
