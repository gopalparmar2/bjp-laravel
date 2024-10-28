<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;
use App\Models\Pincode;
use App\Models\State;

class PincodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pincodeJsonFilePath = public_path('frontAssets/frontData/pincodes.json');
        $allPincodes = json_decode(file_get_contents($pincodeJsonFilePath), true);

        if ($allPincodes) {
            $districtWisePincodes = [];

            foreach ($allPincodes as $pincode) {
                $district = ucwords(strtolower($pincode['districtName']));
                $pincodeArr = $pincode;

                if (!isset($districtWisePincodes[$district])) {
                    $districtWisePincodes[$district] = [];
                }

                $districtWisePincodes[$district][] = $pincode;
            }

            foreach ($districtWisePincodes as $key => $pincodes) {
                foreach ($pincodes as $pincodeArr) {
                    $stateName = ucwords(strtolower($pincodeArr['stateName']));
                    $state = State::where('name', $stateName)->first();

                    if (!$state) {
                        $state = new State();
                        $state->name = $stateName;
                        $state->save();
                    }

                    $district = District::where('name', $key)->first();

                    if (!$district) {
                        $district = new District();
                        $district->state_id = $state->id;
                        $district->name = $key;
                        $district->save();
                    }

                    $pincode = Pincode::where('pincode', $pincodeArr['pincode'])->first();

                    if (!$pincode) {
                        $pincode = new Pincode();
                        $pincode->state_id = $district->state_id;
                        $pincode->district_id = $district->id;
                        $pincode->pincode = $pincodeArr['pincode'];
                        $pincode->office_name = $pincodeArr['officeName'];
                        $pincode->taluka = $pincodeArr['taluk'];
                        $pincode->save();
                    }

                }
            }
        }
    }
}
