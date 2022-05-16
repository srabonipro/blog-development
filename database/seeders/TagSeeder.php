<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Dollar',
            'slug' => 'dollar'
        ]);
        Tag::create([
            'name' => 'Taka',
            'slug' => 'taka'
        ]);
        Tag::create([
            'name' => 'Railway',
            'slug' => 'railway'
        ]);
        Tag::create([
            'name' => 'Cricket',
            'slug' => 'cricket'
        ]);
        Tag::create([
            'name' => 'Investigation',
            'slug' => 'investigation'
        ]);
        Tag::create([
            'name' => 'Price',
            'slug' => 'price'
        ]);
        Tag::create([
            'name' => 'Wheat',
            'slug' => 'wheat'
        ]);
        Tag::create([
            'name' => 'India',
            'slug' => 'india'
        ]);
        Tag::create([
            'name' => 'Ban',
            'slug' => 'ban'
        ]);
        Tag::create([
            'name' => 'Bangladesh',
            'slug' => 'bangladesh'
        ]);
        Tag::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);
        Tag::create([
            'name' => 'Coronavirus',
            'slug' => 'coronavirus'
        ]);
        Tag::create([
            'name' => 'Brand',
            'slug' => 'brand'
        ]);
        Tag::create([
            'name' => 'Women',
            'slug' => 'women'
        ]);
        Tag::create([
            'name' => 'Dhaka',
            'slug' => 'dhaka'
        ]);
        Tag::create([
            'name' => 'Entrepreneur',
            'slug' => 'entrepreneur'
        ]);
        Tag::create([
            'name' => 'Pollution',
            'slug' => 'pollution'
        ]);
        Tag::create([
            'name' => 'Development',
            'slug' => 'development'
        ]);
    }
}
