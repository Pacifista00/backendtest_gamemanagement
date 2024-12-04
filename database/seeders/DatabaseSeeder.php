<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                "email" => "admin@mail.com",
                "password" => bcrypt('admin123'),
            ]
        ];
        $categories = [
            [
                "name" => "Adventure"
            ],
            [
                "name" => "Racing"
            ],
            [
                "name" => "First Person Shooter"
            ],
            [
                "name" => "Action"
            ],
            [
                "name" => "Role-Playing-Games"
            ],
            [
                "name" => "Puzzle"
            ],
            [
                "name" => "Strategy"
            ],
            [
                "name" => "Simulation"
            ],
            [
                "name" => "Fighting"
            ],
            [
                "name" => "Horror"
            ],
            [
                "name" => "Music"
            ],
            [
                "name" => "Sports"
            ],
            [
                "name" => "Survival"
            ],
            [
                "name" => "Card & Board Games"
            ],
            [
                "name" => "Hack and Slash"
            ],
            [
                "name" => "Education"
            ]
        ];
        $games = [
            [
                "name" => "Crash Bandicoot",
                "description" => "Crash Bandicoot is a video game series, originally developed by Naughty Dog as an exclusive game for the Sony PlayStation console.",
                "price" => 50000,
                "category_id" => 1,
                "status" => 'tersedia',
            ],
            [
                "name" => "Sengoku Basara 2 Heroes",
                "description" => "Sengoku Basara 2 is the sequel to the first Sengoku Basara game. First released by Capcom for the PlayStation 2 on 27 July 2006.",
                "price" => 75000,
                "category_id" => 2,
                "status" => 'tersedia',
            ],
            [
                "name" => "God of War 3",
                "description" => "God of War III is the fifth installment in the God of War series, released on March 16, 2010 for the PlayStation 3.",
                "price" => 100000,
                "category_id" => 3,
                "status" => 'tersedia',
            ],
        ];
        

        foreach ($users as $user) {
            User::create([
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
            ]);
        }
        foreach ($games as $index => $game) {
            Game::create([
                'name' => $game['name'],
                'description' => $game['description'],
                'price' => $game['price'],
                'category_id' => $game['category_id'],
                'status' => $game['status'],
            ]);
        }
    }
}