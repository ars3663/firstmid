<?php

namespace Tests\Feature;

use PhpParser\Builder\Use_;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserTest()
    {
        $user = User::find(1);

        $user->name = 'Virat Kohli';

        $this->assertTrue($user->save());
    }
}
