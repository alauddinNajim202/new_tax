<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            [
                'question' => 'What is your return policy?',
                'answer' => 'You can return any item within 30 days of purchase as long as it is in original condition.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How do I track my order?',
                'answer' => 'Once your order has shipped, you will receive an email with a tracking number and link.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Do you ship internationally?',
                'answer' => 'Yes, we offer international shipping to select countries. Please check our shipping policy for details.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Can I change my order after it has been placed?',
                'answer' => 'Unfortunately, once an order is placed, we cannot make changes to it. Please double-check your order before submitting.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'We accept various payment methods including credit cards, PayPal, and Apple Pay.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How can I contact customer support?',
                'answer' => 'You can reach our customer support team via email at support@example.com or through our contact form on the website.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
