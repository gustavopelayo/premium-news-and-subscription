<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class ArticleTest extends TestCase
{
    public function testUserModelUniqueEmail()
    {
        $user1 = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->expectException(\Illuminate\Database\QueryException::class);

        User::create([
            'name' => 'Another User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}