<?php

namespace Database\Seeders;

use App\Models\AboutSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutSetting::create([

            'title1' => 'We Love To Explore',

            'title2' => 'Learn From Us',

            'team_title' => 'Meet The Team',

            'banner' => 'https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg',

            'image1' => 'https://img-19.commentcamarche.net/cI8qqj-finfDcmx6jMK6Vr-krEw=/1500x/smart/b829396acc244fd484c5ddcdcb2b08f3/ccmcms-commentcamarche/20494859.jpg',

            'image2' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png',

            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, adipisci?',

            'description1' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.',

            'description2' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.',

            'team_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus commodi blanditiis, soluta magnam atque laborum ex qui recusandae',

        ]);
    }
}
