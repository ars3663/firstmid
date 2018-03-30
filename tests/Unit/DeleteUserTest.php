<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = new User();
        $user->name = 'David';
        $user->email = 'dave45@gmail.com';
        $user->password = 'hotdog';
        $user->save();

        $this->assertTrue($user->delete());
    }
}
