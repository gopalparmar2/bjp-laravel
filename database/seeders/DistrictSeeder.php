<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districtJsonFilePath = public_path('frontAssets/frontData/districts.json');
        $allDistricts = json_decode(file_get_contents($districtJsonFilePath), true);

        District::truncate();

        foreach ($allDistricts as $key => $districts) {
            $stateId = $key + 1;

            foreach ($districts as $district) {
                $exist = District::where('name', $district['name'])->first();

                if (!$exist) {
                    $newDistrict = new District();
                    $newDistrict->id = $district['id'];
                    $newDistrict->state_id = $stateId;
                    $newDistrict->name = $district['name'];
                    $newDistrict->save();
                }
            }
        }
    }
}
