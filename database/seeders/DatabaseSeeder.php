<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void {
        $this->call([

            SystemSettingSeeder::class,
            SocialMediaSettingsSeeder::class,

            FaqsSeeder::class,
            DynamicPageSeeder::class,

            TeamsSeeder::class,

        ]);
    }
}
