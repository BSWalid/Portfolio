<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalInfo::create
        ([
            'name'=>'Walid Bensidiaissa',
            'img'=>'some img',
            'short_bio'=>'short bio',
            'about_me'=>'about me section ',
            'bio_img'=>'some img',

        ]);
    }
}
