<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssemblyConstituency;

class AssemblyConstituencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assemblyJsonFilePath = public_path('frontAssets/frontData/assemblies.json');
        $allAssemblies = json_decode(file_get_contents($assemblyJsonFilePath), true);

        AssemblyConstituency::truncate();

        foreach ($allAssemblies as $key => $assemblies) {
            $stateId = $key + 1;

            foreach ($assemblies as $assembly) {
                $exist = AssemblyConstituency::where('name', $assembly['name'])->first();

                if (!$exist) {
                    $newAssemblyConstituency = new AssemblyConstituency();
                    $newAssemblyConstituency->id = $assembly['id'];
                    $newAssemblyConstituency->state_id = $stateId;
                    $newAssemblyConstituency->name = $assembly['name'];
                    $newAssemblyConstituency->number = $assembly['number'];
                    $newAssemblyConstituency->save();
                }
            }
        }
    }
}
