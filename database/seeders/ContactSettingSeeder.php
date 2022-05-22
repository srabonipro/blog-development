<?php

namespace Database\Seeders;

use App\Models\ContactSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactSetting::create([
            'email' => 'admin@miniblog.com',
            'phone' => '0123456789',
            'address' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, odio!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, odio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, odio!',
            'image' => 'https://cdn.pixabay.com/photo/2022/05/18/17/22/leaves-7205773_960_720.jpg',
        ]);
    }
}
