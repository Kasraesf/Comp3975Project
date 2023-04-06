<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsletter1 = new \App\Models\Newsletter([
            'Author' => 'Newsletter 1',
            'Description' => 'BCIT Student life',
            'Status' => '1',
        ]);
        $newsletter1->save();

        $article1 = new \App\Models\Articles([
            'Title' => 'Tips for Success at BCIT',
            'Content' => 'Are you a new student at BCIT? Check out these tips to help you succeed in your studies and make the most of your time on campus.',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => $newsletter1->id,
        ]);
        $article1->save();

        $article2 = new \App\Models\Articles([
            'Title' => 'BCIT Clubs and Activities',
            'Content' => 'Looking to get involved on campus? Check out the various clubs and activities available at BCIT and find something that interests you!',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => $newsletter1->id,
        ]);
        $article2->save();

        $newsletter2 = new \App\Models\Newsletter([
            'Author' => 'Newsletter 2',
            'Description' => 'Games and world',
            'Status' => '1',
        ]);
        $newsletter2->save();

        $article3 = new \App\Models\Articles([
            'Title' => 'The Top Video Games of 2023',
            'Content' => 'Get ready for some serious gaming in 2023 with these highly anticipated video game releases. From action-packed shooters to immersive RPGs, there\'s something for everyone!',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => $newsletter2->id,
        ]);
        $article3->save();

        $article4 = new \App\Models\Articles([
            'Title' => 'Exploring the World Through Gaming',
            'Content' => 'Video games aren\'t just entertainment – they can also be a tool for exploring different cultures and parts of the world. Discover some of the most immersive and educational games out there.',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => $newsletter2->id,
        ]);
        $article4->save();

        $newsletter3 = new \App\Models\Newsletter([
            'Author' => 'Newsletter 3',
            'Description' => 'General Politics and World',
            'Status' => '1',
        ]);
        $newsletter3->save();

        $article5 = new \App\Models\Articles([
            'Title' => 'The State of Global Politics in 2023',
            'Content' => 'As we enter a new year, the political landscape of the world is shifting. From the ongoing conflicts in the Middle East to the rise of new political movements in Europe, here\'s what you need to know.',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => $newsletter3->id,
        ]);
        $article5->save();

        $article6 = new \App\Models\Articles([
            'Title' => 'The Future of Democracy',
            'Content' => 'As the world becomes more interconnected and technology advances, what will the future of democracy look like? Explore some of the emerging trends and challenges in democraticy',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => $newsletter3->id,
        ]);
        $article6->save();

}
}

