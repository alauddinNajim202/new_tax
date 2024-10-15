<?php

namespace Database\Seeders;

use App\Models\DynamicPage;
use Illuminate\Database\Seeder;

class DynamicPageSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DynamicPage::insert([
            [
                'page_title' => 'About Us',
                'page_slug' => 'about-us',
                'page_content' => '<p>This is the about us content.</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'Contact Us',
                'page_slug' => 'contact-us',
                'page_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio, vitae semper sem sollicitudin ut. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi lectus nisl, sagittis et interdum id, vehicula at odio.

                Ut at lectus vel est fermentum congue a sit amet risus. Donec lacinia dui et ex ullamcorper, in fermentum lectus varius. Morbi vel nulla id mi laoreet gravida. Cras tincidunt, urna ac fermentum venenatis, erat quam cursus erat, ac tincidunt eros felis at purus.</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'Privacy Policy',
                'page_slug' => 'privacy-policy',
                'page_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio, vitae semper sem sollicitudin ut. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi lectus nisl, sagittis et interdum id, vehicula at odio.

                Ut at lectus vel est fermentum congue a sit amet risus. Donec lacinia dui et ex ullamcorper, in fermentum lectus varius. Morbi vel nulla id mi laoreet gravida. Cras tincidunt, urna ac fermentum venenatis, erat quam cursus erat, ac tincidunt eros felis at purus.</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
