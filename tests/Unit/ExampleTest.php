<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Post;

class ExampleTest extends TestCase
{
    use DatabaseTransactions; // rols back transactions after tests finished

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $posts = Post::archives();

        $this->assertEquals([
            [
                'year' => (int) $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 2
            ],
            [
                'year' => (int) $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 2
            ]
        ], $posts);
    }
}
