<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s1 = new \App\Models\Articles([
            'Title' => 'Aritcle 1',
            'Content' => 'Lorem Ipsum',
            'ImageURL' => 'https://picsum.photos/200/300',
            'newsletter_id' => '1'
        ]);
        $s1->save();

        $s2 = new \App\Models\Articles([
            'Title' => 'Articles 2',
            'Content' => 'Lorem Ipsum',
            'ImageURL' => 'https://picsum.photos/200/300',
        ]);
        $s2->save();

        $s3 = new \App\Models\Articles([
            'Title' => 'Articles 3',
            'Content' => 'Lorem Ipsum',
            'ImageURL' => 'https://picsum.photos/200/300',
        ]);
        $s3->save();

        $s4 = new \App\Models\Articles([
            'Title' => 'Articles 4',
            'Content' => 'Lorem Ipsum',
            'ImageURL' => 'https://picsum.photos/200/300',
        ]);
        $s4->save();

        $s5 = new \App\Models\Articles([
            'Title' => 'Articles 5',
            'Content' => 'Lorem Ipsum',
            'ImageURL' => 'https://picsum.photos/200/300',
        ]);
        $s5->save();
    }
}

