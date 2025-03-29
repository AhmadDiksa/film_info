<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder {
    public function run(): void {
        DB::table('films')->insert([
            [
                'title' => 'Spider-Man',
                'genre' => 'Action',
                'director' => 'Sam Raimi',
                'release_year' => 2002,
                'rating' => 7.3
            ],
            [
                'title' => 'Spider-man 2',
                'genre' => 'Action',
                'director' => 'Sam Raimi',
                'release_year' => 2004,
                'rating' => 7.3
            ],
            [
                'title' => 'Spider-man 3',
                'genre' => 'Action',
                'director' => 'Sam Raimi',
                'release_year' => 2007,
                'rating' => 6.2
            ],
            [
                'title' => 'Spiderman: No Way Home',
                'genre' => 'Action',
                'director' => 'Jon Watts',
                'release_year' => 2021,
                'rating' => 7.8
            ],
            [
                'title' => 'Spiderman: Into the Spider-Verse',
                'genre' => 'Animation',
                'director' => 'Bob Persichetti',
                'release_year' => 2018,
                'rating' => 8.4
            ],
            [
                'title' => 'Spiderman: Across the Spider-Verse',
                'genre' => 'Animation',
                'director' => 'Joaquim Dos Santos',
                'release_year' => 2023,
                'rating' => 8.9
            ]
        ]);
    }
}

