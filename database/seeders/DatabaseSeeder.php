<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $authorSeed = new AuthorSeeder();
        $bookSeed = new BookSeeder();
        $reviewSeed = new ReviewSeeder();

        $authorSeed->run();
        $bookSeed->run();
        $reviewSeed->run();
    }
}
