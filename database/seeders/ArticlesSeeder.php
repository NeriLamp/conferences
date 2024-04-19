<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Article())->insert([
            [
                'title'=>Lorem::sentence(5),
                'content'=>Lorem::text(),
                'dateTime'=>Carbon::now(),
                'address'=>Lorem::text()
        ],
        [
            'title'=>Lorem::sentence(5),
            'content'=>Lorem::text(),
            'dateTime'=>Carbon::now(),
            'address'=>Lorem::text()
        ]
        ]);
    }
}
