<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Qualification;
use App\Models\Profession;
use App\Models\Religion;
use App\Models\Category;

class BasicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $religions = [
            [ "name" => "Hindu" ],
            [ "name" => "Muslim" ],
            [ "name" => "Sikh" ],
            [ "name" => "Christian" ],
            [ "name" => "Buddhist" ],
            [ "name" => "Zoroastrian/Parsi" ],
            [ "name" => "Jain" ],
            [ "name" => "Other" ],
        ];

        foreach ($religions as $religion) {
            $exist = Religion::where('name', $religion['name'])->first();

            if (!$exist) {
                $newReligion = new Religion();
                $newReligion->name = $religion['name'];
                $newReligion->save();
            }
        }

        $qualifications = [
            [ "name" => "Less than 10th" ],
            [ "name" => "10th Pass" ],
            [ "name" => "Diploma/ITI" ],
            [ "name" => "12th Pass" ],
            [ "name" => "Graduate" ],
            [ "name" => "Post Graduate" ],
            [ "name" => "PhD and Above" ]
        ];

        foreach ($qualifications as $qualification) {
            $exist = Qualification::where('name', $qualification['name'])->first();

            if (!$exist) {
                $newQualification = new Qualification();
                $newQualification->name = $qualification['name'];
                $newQualification->save();
            }
        }

        $professions = [
            [ "name" => "Armed Forces" ],
            [ "name" => "Artists - Actor/Writer/Musician" ],
            [ "name" => "Banker" ],
            [ "name" => "Business / Industrialist / Trader/ Self Employed" ],
            [ "name" => "Chartered Accountant" ],
            [ "name" => "Civil Servant / Police" ],
            [ "name" => "Doctor / Medical Professional" ],
            [ "name" => "Educationist - Professor / Teacher" ],
            [ "name" => "Engineer / Scientist" ],
            [ "name" => "Farmer - Agriculturist" ],
            [ "name" => "Gig Worker" ],
            [ "name" => "Homemaker" ],
            [ "name" => "Journalist / Media Professional" ],
            [ "name" => "Karmyogi - Mechanic / Carpenter / Barber etc" ],
            [ "name" => "Labour / Daily wage worker" ],
            [ "name" => "Legal Professional" ],
            [ "name" => "NGO / Trustee / Social Worker" ],
            [ "name" => "Politician / Social Activist" ],
            [ "name" => "Private Sector - Corporate jobs" ],
            [ "name" => "Public sector - Government jobs" ],
            [ "name" => "Religious Preacher" ],
            [ "name" => "Retired" ],
            [ "name" => "Sports and Fitness Professional" ],
            [ "name" => "Street Vendors" ],
            [ "name" => "Student" ],
            [ "name" => "Others" ]
        ];

        foreach ($professions as $profession) {
            $exist = Profession::where('name', $profession['name'])->first();

            if (!$exist) {
                $newProfession = new Profession();
                $newProfession->name = $profession['name'];
                $newProfession->save();
            }
        }

        $categories = [
            [ "name" => "General" ],
            [ "name" => "SC" ],
            [ "name" => "ST" ],
            [ "name" => "OBC" ],
            [ "name" => "Minority" ],
        ];

        foreach ($categories as $category) {
            $exist = Category::where('name', $category['name'])->first();

            if (!$exist) {
                $newCategory = new Category();
                $newCategory->name = $category['name'];
                $newCategory->save();
            }
        }
    }
}
