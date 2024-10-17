<?php

namespace Database\Seeders;

use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       SystemSetting::insert([
            [
                'title' => 'My Application',
                'email' => 'contact@example.com',
                'phone' => '+1234567890',
                'address' => '123 Main St, Anytown, USA',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30677.8353327936!2d-77.122757!3d38.789002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b214f5c66d9b%3A0x344dbef3e6f3d1dc!2sBush%20Hill%20Woods%2C%20Rose%20Hill%2C%20VA%2022310%2C%20USA!5e1!3m2!1sen!2sbd!4v1726906545410!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'system_name' => 'MyApp',
                'copyright_text' => '© 2024 My Application. All rights reserved.',
                'logo' => 'frontend/images/logo/logo.png',
                'footer_logo' => 'frontend/images/logo/footer-logo.png',
                'favicon' => 'frontend/images/logo/footer-logo.png',
                'description' => 'This is a description of my application.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
