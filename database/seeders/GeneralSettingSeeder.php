<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.',
            'copywrite' => 'Copyright © 2022 All rights reserved | This template is made with',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'twitter' => 'https://twitter.com/',
            'linkedin' => 'https://linkedin.com/',
            'youtube' => 'https://youtube.com/',
        ]);
    }
}
