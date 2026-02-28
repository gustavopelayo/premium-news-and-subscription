<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function test_database_seeding()
    {
        $this->seed();

        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }
}