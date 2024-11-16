<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zilla;

class ZillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zillaJsonFilePath = public_path('frontAssets/frontData/zillas.json');
        $allZillas = json_decode(file_get_contents($zillaJsonFilePath), true);

        Zilla::truncate();

        foreach ($allZillas as $key => $zillas) {
            $stateId = $key + 1;

            foreach ($zillas as $zilla) {
                $exist = Zilla::where('name', $zilla['name'])->first();

                if (!$exist) {
                    $newZilla = new Zilla();
                    $newZilla->id = $zilla['id'];
                    $newZilla->state_id = $stateId;
                    $newZilla->name = $zilla['name'];
                    $newZilla->save();
                }
            }
        }
    }
}
