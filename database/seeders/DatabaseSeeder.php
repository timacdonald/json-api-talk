<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * Hello, Tim 👋
         * Tim has 3 posts.
         * Each of Tim's posts have 2 comments.
         */
        $tim = User::factory()
            ->has(Post::factory()
                ->times(3)
                ->has(Comment::factory()
                    ->times(2)))
            ->create([
                'name' => 'Tim MacDonald',
                'email' => 'tim@example.com',
            ]);
    }
}
