<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quote::create([
            'content' => 'Success is going from failure to failure without losing your enthusiasm',
            'author' => 'Winston Churchill',
        ]);

        Quote::create([
            'content' => 'Dream big and dare to fail',
            'author' => 'Norman Vaughan',
        ]);

        Quote::create([
            'content' => 'It does not matter how slowly you go as long as you do not stop',
            'author' => 'Confucius',
        ]);
        
        Quote::create([
            'content' => 'Fear and anxiety are consequence of your imagination running wild... You are suffering a situation that may never happen.',
            'author' => 'Sadhguru',
        ]);

        Quote::create([
            'content' => 'Integrity is not a bunch of values or ethics. Integrity is the coherence between how you are, how you think, and how you act. The simplest way to integrity is to make your thought process inclusive.',
            'author' => 'Sadhguru',
        ]);

        Quote::create([
            'content' => 'If you want your life to be profound, you need to pay attention. Anything yields to you only to the extent you pay attention to it. In this context, your breath is a beautiful device because it is always on.',
            'author' => 'Sadhguru',
        ]);

        Quote::create([
            'content' => 'The more you know, the more you realize you know nothing',
            'author' => 'Socrates',
        ]);

        Quote::create([
            'content' => 'Youth is not just a number, youth means you are constantly in the making. Staying young means being willing to learn, evolve, and be open to life.',
            'author' => 'Sadhguru',
        ]);

        Quote::create([
            'content' => 'The more security you seek, the more disturbed you will be about every change that happens in your life.',
            'author' => 'Sadhguru',
        ]);

    }
}
