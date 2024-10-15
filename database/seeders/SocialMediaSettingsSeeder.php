<?php

namespace Database\Seeders;

use App\Models\SocialMediaSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMediaSetting::insert([
            'twitter' => 'https://twitter.com/yourprofile',
            'facebook' => 'https://facebook.com/yourprofile',
            'linkedin' => 'https://linkedin.com/in/yourprofile',
            'youtube' => 'https://youtube.com/yourchannel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
