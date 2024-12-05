<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Relationship;
use App\Models\Profession;
use App\Models\Religion;
use App\Models\Category;
use App\Models\Education;
use App\Models\Caste;

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

        $educations = [
            [ "name" => "Less than 10th" ],
            [ "name" => "10th Pass" ],
            [ "name" => "Diploma/ITI" ],
            [ "name" => "12th Pass" ],
            [ "name" => "Graduate" ],
            [ "name" => "Post Graduate" ],
            [ "name" => "PhD and Above" ],
        ];

        foreach ($educations as $education) {
            $exist = Education::where('name', $education['name'])->first();

            if (!$exist) {
                $newEducation = new Education();
                $newEducation->name = $education['name'];
                $newEducation->save();
            }
        }

        $relationships = [
            [ "name" => "Wife" ],
            [ "name" => "Husband" ],
            [ "name" => "Mother" ],
            [ "name" => "Father" ],
            [ "name" => "Son" ],
            [ "name" => "Daughter" ],
            [ "name" => "Grand Father" ],
            [ "name" => "Grand Mother" ],
            [ "name" => "Brother" ],
            [ "name" => "Sister" ],
            [ "name" => "Uncle" ],
            [ "name" => "Aunt" ],
            [ "name" => "Other" ],
        ];

        foreach ($relationships as $relationship) {
            $exist = Relationship::where('name', $relationship['name'])->first();

            if (!$exist) {
                $newRelationship = new Relationship();
                $newRelationship->name = $relationship['name'];
                $newRelationship->save();
            }
        }

        $castes = [
            [ "name" => "Leva Patel" ],
            [ "name" => "Khat Rajput" ],
            [ "name" => "Koli" ],
            [ "name" => "Bharvad / Rabari" ],
            [ "name" => "Sagar" ],
            [ "name" => "Brahman" ],
            [ "name" => "Dalit" ],
            [ "name" => "Bavaji" ],
            [ "name" => "Devipujak" ],
            [ "name" => "Sindhi" ],
            [ "name" => "Vanand" ],
            [ "name" => "Darbar / Kshatriya" ],
            [ "name" => "Luhar / Mistri" ],
            [ "name" => "Gadhvi" ],
            [ "name" => "Kadva Patel" ],
            [ "name" => "Darji" ],
            [ "name" => "Other" ],
        ];

        foreach ($castes as $caste) {
            $exist = Caste::where('name', $caste['name'])->first();

            if (!$exist) {
                $newCaste = new Caste();
                $newCaste->name = $caste['name'];
                $newCaste->save();
            }
        }
    }
}
